<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku;

use GuzzleHttp\Exception\RequestException;
use Lin\Ku\Exceptions\Exception;

class Request
{
    protected $key='';

    protected $secret='';

    protected $host='';

    protected $passphrase='';



    protected $nonce='';

    protected $signature='';

    protected $headers=[];

    protected $type='';

    protected $path='';

    protected $data=[];

    protected $options=[];

    protected $platform='';

    public function __construct(array $data)
    {
        $this->key=$data['key'] ?? '';
        $this->secret=$data['secret'] ?? '';
        $this->passphrase = $data['passphrase'] ?? '';
        $this->host=$data['host'] ?? '';

        $this->options=$data['options'] ?? [];

        $this->platform=$data['platform'];
    }

    /**
     *
     * */
    protected function auth(){
        $this->nonce();

        $this->signature();

        $this->headers();

        $this->options();
    }

    /**
     *
     * */
    protected function nonce(){
        $this->nonce=floor(microtime(true) * 1000);
    }

    /**
     *
     * */
    protected function signature(){
        $body='';
        $path=$this->type.$this->path;

        if (!empty($this->data)) {
            if($this->type=='GET') {
                $path.='?'.http_build_query($this->data);
            }else{
                $body=json_encode($this->data);
            }
        }

        $plain = $this->nonce . $path . $body;
        $this->signature = base64_encode(hash_hmac('sha256', $plain, $this->secret, true));
    }

    /**
     *
     * */
    protected function headers(){
        $this->headers= [
            'Content-Type' => 'application/json',

            'KC-API-KEY'        => $this->key,
            'KC-API-TIMESTAMP'  => $this->nonce,
            'KC-API-PASSPHRASE' => $this->passphrase,
            'KC-API-SIGN'       => $this->signature,
        ];

        switch ($this->platform){
            case 'spot':{
                if(isset($this->options['headers']['KC-API-KEY-VERSION']) && $this->options['headers']['KC-API-KEY-VERSION']==1) break;

                $this->headers['KC-API-KEY-VERSION']=2;
                $this->headers['KC-API-PASSPHRASE']=base64_encode(hash_hmac('sha256', $this->passphrase, $this->secret, true));
            }
            case 'future':;
            default:;
        }
    }

    /**
     *
     * */
    protected function options(){
        if(isset($this->options['headers'])) $this->headers=array_merge($this->headers,$this->options['headers']);

        $this->options['headers']=$this->headers;
        $this->options['timeout'] = $this->options['timeout'] ?? 60;
    }

    /**
     *
     * */
    protected function send(){
        $client = new \GuzzleHttp\Client();

        $url=$this->host.$this->path;

        if(!empty($this->data)) {
            if($this->type=='GET') {
                $url.='?'.http_build_query($this->data);
            }else{
                $this->options['body']=json_encode($this->data);
            }
        }

        $response = $client->request($this->type, $url, $this->options);

        return $response->getBody()->getContents();
    }

    /*
     *
     * */
    protected function exec(){
        $this->auth();

        try {
            return json_decode($this->send(),true);
        }catch (RequestException $e){
            if(method_exists($e->getResponse(),'getBody')){
                $contents=$e->getResponse()->getBody()->getContents();

                $temp=json_decode($contents,true);
                if(!empty($temp)) {
                    $temp['_method']=$this->type;
                    $temp['_url']=$this->host.$this->path;
                }else{
                    $temp['_message']=$e->getMessage();
                }
            }else{
                $temp['_message']=$e->getMessage();
            }

            $temp['_httpcode']=$e->getCode();

            throw new Exception(json_encode($temp));
        }
    }
}

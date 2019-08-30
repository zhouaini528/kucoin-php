<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku;


use Lin\Ku\Api\Kucoin\Accounts;
use Lin\Ku\Api\Kucoin\Orders;
use Lin\Ku\Api\Kucoin\Currencies;
use Lin\Ku\Api\Kucoin\Deposit;
use Lin\Ku\Api\Kucoin\Fills;
use Lin\Ku\Api\Kucoin\Market;
use Lin\Ku\Api\Kucoin\Withdrawals;

class Kucoin
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;
    
    protected $options=[];
    
    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://api.kucoin.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
        $this->passphrase=$passphrase;
    }
    
    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'passphrase'=>$this->passphrase,
            'host'=>$this->host,
            'options'=>$this->options,
        ];
    }
    
    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }
    
    /**
     *
     * */
    public function account(){
        return new Accounts($this->init());
    }
    
    /**
     *
     * */
    public function currencies(){
        return new Currencies($this->init());
    }
    
    /**
     *
     * */
    public function deposit(){
        return new Deposit($this->init());
    }
    
    /**
     *
     * */
    public function fills(){
        return new Fills($this->init());
    }
    
    /**
     *
     * */
    public function market(){
        return new Market($this->init());
    }
    
    /**
     *
     * */
    public function order(){
        return  new Orders($this->init());
    }
    
    /**
     *
     * */
    public function withdrawals(){
        return  new Withdrawals($this->init());
    }
}
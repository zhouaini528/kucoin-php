<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku;


use Lin\Ku\Api\Spot\Accounts;
use Lin\Ku\Api\Spot\Orders;
use Lin\Ku\Api\Spot\Currencies;
use Lin\Ku\Api\Spot\Deposit;
use Lin\Ku\Api\Spot\Fills;
use Lin\Ku\Api\Spot\Market;
use Lin\Ku\Api\Spot\Withdrawals;

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
            'platform'=>'spot',

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

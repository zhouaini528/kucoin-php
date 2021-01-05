<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku;


use Lin\Ku\Api\Kumex\Accounts;
use Lin\Ku\Api\Kumex\Contracts;
use Lin\Ku\Api\Kumex\Deposit;
use Lin\Ku\Api\Kumex\Fills;
use Lin\Ku\Api\Kumex\Level;
use Lin\Ku\Api\Kumex\Orders;
use Lin\Ku\Api\Kumex\Position;
use Lin\Ku\Api\Kumex\System;
use Lin\Ku\Api\Kumex\Transfer;
use Lin\Ku\Api\Kumex\Withdrawals;

class Kumex
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://api-futures.kucoin.com'){
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
            'platform'=>'future',

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
        return  new Accounts($this->init());
    }

    /**
     *
     * */
    public function contracts(){
        return  new Contracts($this->init());
    }

    /**
     *
     * */
    public function deposit(){
        return  new Deposit($this->init());
    }

    /**
     *
     * */
    public function fills(){
        return  new Fills($this->init());
    }

    /**
     *
     * */
    public function level(){
        return  new Level($this->init());
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
    public function position(){
        return  new Position($this->init());
    }

    /**
     *
     * */
    public function system(){
        return  new System($this->init());
    }

    /**
     *
     * */
    public function transfer(){
        return  new Transfer($this->init());
    }

    /**
     *
     * */
    public function withdrawals(){
        return  new Withdrawals($this->init());
    }
}

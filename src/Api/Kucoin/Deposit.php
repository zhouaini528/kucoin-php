<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Kucoin;

use Lin\Ku\Request;

class Deposit extends Request
{
    /**
     * POST /api/v1/deposit-addresses
     * */
    public function postAddresses(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/deposit-addresses';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /api/v1/deposit-addresses
     * */
    public function getAddresses(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/deposit-addresses';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     * GET /api/v1/deposits
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/deposits';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     * GET /api/v1/hist-deposits
     * */
    public function getHist(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/hist-deposits';
        $this->data=$data;
        return $this->exec();
    }
}
<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Kumex;

use Lin\Ku\Request;

class Deposit extends Request
{
    /**
     * GET /api/v1/deposit-address
     * */
    public function getAddress(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/deposit-address';
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/deposit-list
     * */
    public function getList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/deposit-list';
        $this->data=$data;
        
        return $this->exec();
    }
    
}
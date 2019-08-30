<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Kucoin;

use Lin\Ku\Request;

class Accounts extends Request
{
    /**
     * POST /api/v1/accounts
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/accounts';
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/accounts
     * */
    public function getAll(){
        $this->type='GET';
        $this->path='/api/v1/accounts';
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/accounts/{accountId}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/accounts/'.$data['accountId'];
        unset($data['accountId']);
        
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/accounts/{accountId}/ledgers
     * */
    public function getLedgers(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/accounts/'.$data['accountId'].'/ledgers';
        unset($data['accountId']);
        
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/accounts/{accountId}/holds
     * */
    public function getHolds(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/accounts/'.$data['accountId'].'/holds';
        unset($data['accountId']);
        
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/sub-accounts/{subUserId}
     * */
    public function getSub(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/sub-accounts/'.$data['subUserId'];
        unset($data['subUserId']);
        
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/sub-accounts
     * */
    public function getSubAll(){
        $this->type='GET';
        $this->path='/api/v1/sub-accounts';
        
        return $this->exec();
    }
    
    /**
     * POST /api/v1/accounts/sub-transfer
     * */
    public function getSubTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/accounts/sub-transfer';
        
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * POST /api/v2/accounts/inner-transfer
     * */
    public function getInnerTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/api/v2/accounts/inner-transfer';
        
        $this->data=$data;
        
        return $this->exec();
    }
}
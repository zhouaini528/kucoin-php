<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Kumex;

use Lin\Ku\Request;

class Orders extends Request
{
    /**
     * POST /api/v1/orders
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/orders';
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * DELETE /api/v1/orders/{order-id}
     * */
    public function delete(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v1/orders/'.$data['order-id'];
        unset($data['order-id']);
        
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * DELETE /api/v1/orders
     * */
    public function deleteAll(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v1/orders';
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * DELETE /api/v1/stopOrders
     * */
    public function deleteStop(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v1/stopOrders';
        $this->data=$data;
        
        return $this->exec();
    }
    
    
    /**
     * GET /api/v1/orders
     * */
    public function getAll(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/orders';
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/stopOrders
     * */
    public function getStopAll(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/stopOrders';
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/recentDoneOrders
     * */
    public function getRecentDone(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/recentDoneOrders';
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/v1/orders/{order-id}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/orders/'.$data['order-id'];
        unset($data['order-id']);
        
        $this->data=$data;
        
        return $this->exec();
    }
    
}
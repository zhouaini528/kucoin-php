<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Kucoin;

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
     * DELETE /api/v1/orders/{orderId}
     * */
    public function delete(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v1/orders/'.$data['orderId'];
        $this->data=$data;

        return $this->exec();
    }

    /**
     * DELETE /api/v1/orders
     * */
    public function deletes(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v1/orders/';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/orders
     * */
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/orders/';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/hist-orders
     * */
    public function getHist(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/hist-orders';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/limit/orders
     * */
    public function getLimit(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/limit/orders';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/orders/{orderId}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/orders/'.$data['orderId'];
        unset($data['orderId']);

        $this->data=$data;

        return $this->exec();
    }
}

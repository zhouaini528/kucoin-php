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
        $this->path='/api/v1/orders/'.$data['order_id'];
        unset($data['order_id']);

        $this->data=$data;

        return $this->exec();
    }

    /**
     * DELETE /api/v1/orders
     * */
    public function deletes(array $data=[]){
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
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/orders';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/stopOrders
     * */
    public function getStops(array $data=[]){
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
     * GET /api/v1/orders/{order-id}?clientOid={client-order-id}
     * GET /api/v1/orders/5cdfc138b21023a909e5ad55 (通过 orderId 获取订单信息)
     * GET /api/v1/orders/byClientOid?clientOid=eresc138b21023a909e5ad59 (通过用户传入的订单 id查询订单信息)
     * */
    public function get(array $data=[]){
        $this->path='/api/v1/orders/';

        if(isset($data['client_order_id'])) {
            $this->path.='byClientOid?clientOid='.$data['client_order_id'];
        }
        if(isset($data['order_id'])) {
            $this->path.=$data['order_id'];
        }

        unset($data['order_id']);
        unset($data['client_order_id']);

        $this->type='GET';
        $this->data=$data;

        return $this->exec();
    }

}

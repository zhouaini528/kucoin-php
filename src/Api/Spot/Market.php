<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Spot;

use Lin\Ku\Request;

class Market extends Request
{
    /**
     * GET /api/v1/symbols
     * GET /api/v2/symbols
     * */
    public function getSymbols(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/symbols';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /api/v1/market/allTickers
     * */
    public function getAllTickers(){
        $this->type='GET';
        $this->path='/api/v1/market/allTickers';
        return $this->exec();
    }

    /**
     * GET /api/v1/market/stats
     * */
    public function getStats(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/market/stats';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /api/v1/markets
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/markets';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /api/v1/market/orderbook/level1
     * */
    public function getOrderBookLevel1(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/market/orderbook/level1';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /api/v1/market/orderbook/level2_20
     * */
    public function getOrderBookLevel2_20(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/market/orderbook/level2_20';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /api/v1/market/orderbook/level2_100
     * */
    public function getOrderBookLevel2_100(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/market/orderbook/level2_100';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /api/v2/market/orderbook/level2
     * */
    public function getOrderBookLevel2(array $data=[]){
        $this->type='GET';
        $this->path='/api/v2/market/orderbook/level2';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /api/v1/market/orderbook/level3
     * */
    public function getOrderBookLevel3(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/market/orderbook/level3';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /api/v1/market/histories
     * */
    public function getHistories(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/market/histories';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * GET /api/v1/market/candles
     * */
    public function getCandles(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/market/candles';
        $this->data=$data;
        return $this->exec();
    }
}

<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Future;

use Lin\Ku\Request;

class System extends Request
{
    /**
     * GET /api/v1/funding-history
     * */
    public function getFundingHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/funding-history';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/ticker
     * */
    public function getTicker(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/ticker';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/timestamp
     * */
    public function getTimestamp(){
        $this->type='GET';
        $this->path='/api/v1/timestamp';

        return $this->exec();
    }

    /**
     * GET /api/v1/trade/history
     * */
    public function getTradeHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/trade/history';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/interest/query
     * */
    public function getInterestQuery(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/interest/query';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/index/query
     * */
    public function getIndexQuery(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/index/query';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/mark-price/{symbol}/current
     * */
    public function getMarkPriceCurrent(array $data=[]){
        $this->type='GET';
        $this->path='GET /api/v1/mark-price/'.$data['symbol'].'/current';
        unset($data['symbol']);

        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/premium/query
     * */
    public function getPremiumQuery(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/premium/query';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /v1/funding-rate/{symbol}/current
     * */
    public function getFundingRateCurrent(array $data=[]){
        $this->type='GET';
        $this->path='/v1/funding-rate/'.$data['symbol'].'/current';
        $this->data=$data;

        return $this->exec();
    }
}

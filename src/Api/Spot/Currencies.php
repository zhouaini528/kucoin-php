<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Spot;

use Lin\Ku\Request;

class Currencies extends Request
{
    /**
     * GET /api/v1/currencies
     * */
    public function getAll(){
        $this->type='GET';
        $this->path='/api/v1/currencies';
        return $this->exec();
    }

    /**
     * GET /api/v1/currencies/{currency}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/currencies/';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/prices
     * */
    public function getPrices(){
        $this->type='GET';
        $this->path='/api/v1/prices';

        return $this->exec();
    }
}

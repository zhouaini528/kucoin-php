<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Future;

use Lin\Ku\Request;

class Contracts extends Request
{
    /**
     * GET /api/v1/contracts/active
     * */
    public function getActive(){
        $this->type='GET';
        $this->path='/api/v1/contracts/active';

        return $this->exec();
    }

    /**
     * GET /api/v1/contracts/{symbol}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/contracts/'.$data['symbol'];
        unset($data['symbol']);

        $this->data=$data;

        return $this->exec();
    }

}

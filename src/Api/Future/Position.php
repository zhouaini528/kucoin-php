<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Future;

use Lin\Ku\Request;

class Position extends Request
{
    /**
     * GET /api/v1/position
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/position';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/positions
     * */
    public function getAll(){
        $this->type='GET';
        $this->path='/api/v1/positions';

        return $this->exec();
    }

    /**
     * POST /api/v1/position/margin/auto-deposit-status
     * */
    public function postAutoDepositStatus(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/position/margin/auto-deposit-status';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * POST /api/v1/position/margin/deposit-margin
     * */
    public function postDepositMargin(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/position/margin/deposit-margin';
        $this->data=$data;

        return $this->exec();
    }

}

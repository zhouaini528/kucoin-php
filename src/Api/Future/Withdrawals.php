<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Future;

use Lin\Ku\Request;

class Withdrawals extends Request
{
    /**
     * GET /api/v1/withdrawals/quotas
     * */
    public function getQuotas(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/withdrawals/quotas';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * POST /api/v1/withdrawals
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/withdrawals';
        $this->data=$data;

        return $this->exec();
    }


    /**
     * GET /api/v1/withdrawal-list
     * */
    public function getList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/withdrawal-list';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * DELETE /api/v1/withdrawals/{withdrawalId}
     * */
    public function delete(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v1/withdrawals/';
        $this->data=$data;

        return $this->exec();
    }

}

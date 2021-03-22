<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Future;

use Lin\Ku\Request;

class Transfer extends Request
{
    /**
     * POST /api/v1/transfer-out
     * */
    public function postOut(array $data=[]){
        $this->type='POST';
        $this->path='/api/v1/transfer-out';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/transfer-list
     * */
    public function getList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/transfer-list';
        $this->data=$data;

        return $this->exec();
    }


    /**
     * DELETE /api/v1/cancel/transfer-out
     * */
    public function deleteOut(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v1/cancel/transfer-out';
        $this->data=$data;

        return $this->exec();
    }

}

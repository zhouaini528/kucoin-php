<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Future;

use Lin\Ku\Request;

class Level extends Request
{
    /**
     * GET /api/v1/level2/snapshot
     * */
    public function getTwoSnapshot(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/level2/snapshot';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/level2/message/query
     * */
    public function getTwoMessageQuery(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/level2/message/query';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/level3/snapshot
     * */
    public function getThreeSnapshot(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/level3/snapshot';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/level3/message/query
     * */
    public function getThreeMessageQuery(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/level3/message/query';
        $this->data=$data;

        return $this->exec();
    }

}

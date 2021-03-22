<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Future;

use Lin\Ku\Request;

class Fills extends Request
{
    /**
     *GET /api/v1/fills
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/fills';
        $this->data=$data;

        return $this->exec();
    }

    /**
     * GET /api/v1/recentFills
     * */
    public function getRecent(){
        $this->type='GET';
        $this->path='/api/v1/recentFills';

        return $this->exec();
    }

    /**
     * GET /api/v1/openOrderStatistics
     * */
    public function getOpenOrderStatistics(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/openOrderStatistics';
        $this->data=$data;

        return $this->exec();
    }

}

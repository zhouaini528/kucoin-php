<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Spot;

use Lin\Ku\Request;

class Fills extends Request
{
    /**
     * GET /api/v1/fills
     * */
    public function get(){
        $this->type='GET';
        $this->path='/api/v1/fills';
        return $this->exec();
    }

    /**
     * GET /api/v1/limit/fills
     * */
    public function getLimit(){
        $this->type='GET';
        $this->path='/api/v1/limit/fills';
        return $this->exec();
    }
}

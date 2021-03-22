<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ku\Api\Future;

use Lin\Ku\Request;

class Accounts extends Request
{
    /**
     * GET /api/v1/account-overview
     * */
    public function getOverview(){
        $this->type='GET';
        $this->path='/api/v1/account-overview';

        return $this->exec();
    }

    /**
     * GET /api/v1/transaction-history
     * */
    public function getTransactionHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/transaction-history';
        $this->data=$data;

        return $this->exec();
    }

}

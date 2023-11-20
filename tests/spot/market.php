<?php


/**
 * @author lin <465382251@qq.com>
 *
 * Fill in your key and secret and pass can be directly run
 *
 * Most of them are unfinished and need your help
 * https://github.com/zhouaini528/okex-php.git
 * */
use Lin\Ku\Kucoin;

require __DIR__ .'../../../vendor/autoload.php';

$kucoin=new Kucoin();

//You can set special needs
$kucoin->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

]);

try {
    $result=$kucoin->market()->getOrderBookLevel1([
        'symbol'=>'BTC-USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$kucoin->market()->getOrderBookLevel2([
        'symbol'=>'BTC-USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$kucoin->market()->get();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$kucoin->market()->getStats([
        'symbol'=>'BTC-USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}






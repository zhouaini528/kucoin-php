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

include 'key_secret.php';

$kucoin=new Kucoin($key,$secret,$passphrase,$host);

//You can set special needs
$kucoin->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
    //If you are developing locally and need an agent, you can set this
    'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    'verify'=>false,
]);

$client_id=rand(10000,99999).rand(10000,99999);
try {
    $result=$kucoin->order()->post([
        'clientOid'=>$client_id,
        'side'=>'buy',
        'symbol'=>'ETH-BTC',
        'price'=>'0.0001',
        'size'=>'10',
        
        //'type'=>'market',
        //'size'=>'0.1'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

//Place an Order
try {
    $result=$kucoin->order()->get([
        'orderId'=>$result['data']['orderId']
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

try {
    $result=$kucoin->order()->delete([
        'orderId'=>$result['data']['id']
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
} 
sleep(1);

try {
    $result=$kucoin->order()->deleteAll([
        'symbol'=>'ETH-BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
} 






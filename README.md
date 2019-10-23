### It is recommended that you read the official document first

Kucoin docs [https://docs.kucoin.com](https://docs.kucoin.com)

All interface methods are initialized the same as those provided by kucoin. See details [src/api](https://github.com/zhouaini528/kucoin-php/tree/master/src/Api)

Many interfaces are not yet complete, and users can continue to extend them based on my design. Welcome to improve it with me

[中文文档](https://github.com/zhouaini528/kucoin-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php)

[Okex](https://github.com/zhouaini528/okex-php)

[Huobi](https://github.com/zhouaini528/huobi-php)

[Binance](https://github.com/zhouaini528/binance-php)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

#### Installation
```
composer require linwj/kucoin
```

Support for more request Settings
```php
$kucoin=new kucoin();
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
    //'verify'=>false,
]);
```

### Kucoin Trading API

Order Book [More](https://github.com/zhouaini528/kucoin-php/blob/master/tests/kucoin/market.php)

```php
$kucoin=new kucoin();

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
```

Order related API [More](https://github.com/zhouaini528/kucoin-php/blob/master/tests/kucoin/order.php)

```php
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
```

Accounts related API [More](https://github.com/zhouaini528/kucoin-php/blob/master/tests/kucoin/accounts.php)

```php
try {
    $result=$kucoin->account()->getAll();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$kucoin->account()->get([
        'accountId'=>'5d5cba60ef83c753ca6ddd16',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

```

[More use cases](https://github.com/zhouaini528/kucoin-php/tree/master/tests/kucoin)

[More API](https://github.com/zhouaini528/kucoin-php/tree/master/src/Api/Kucoin)

### Kumex Trading API

Order Book API [More](https://github.com/zhouaini528/kucoin-php/blob/master/tests/kumex/level.php)

```php
try {
    $result=$kumex->level()->getTwoSnapshot([
        'symbol'=>'XBTUSDM',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$kumex->level()->getThreeSnapshot([
        'symbol'=>'XBTUSDM',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Order related API [More](https://github.com/zhouaini528/kucoin-php/blob/master/tests/kumex/order.php)

```php
$clientOid=rand(10000,99999).rand(10000,99999);
try {
    $result=$kumex->order()->post([
        'clientOid'=>$clientOid,
        'side'=>'buy',
        'symbol'=>'XBTUSDM',
        'leverage'=>10,
        
        'price'=>9000,
        'size'=>10,
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

try {
    $result=$kumex->order()->get([
        'order-id'=>$result['data']['orderId'],
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

try {
    $result=$kumex->order()->delete([
        'order-id'=>$result['data']['id'],
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Accounts related API [More](https://github.com/zhouaini528/kucoin-php/blob/master/tests/kumex/accounts.php)

```php
try {
    $result=$kumex->account()->getOverview();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$kumex->account()->getTransactionHistory();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Position related API [More](https://github.com/zhouaini528/kucoin-php/blob/master/tests/kumex/position.php)
```php
try {
    $result=$kumex->position()->getAll();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$kumex->position()->get([
        'symbol'=>'XBTUSDM',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

[More Test](https://github.com/zhouaini528/kucoin-php/tree/master/tests/kumex)

[More API](https://github.com/zhouaini528/kucoin-php/tree/master/src/Api/Kumex)

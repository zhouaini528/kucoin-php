### 建议您先阅读官方文档

Kucoin 文档地址 [https://docs.kucoin.com/cn](https://docs.kucoin.com/cn)

Kumex 文档地址 [https://docs.kumex.com/cn](https://docs.kumex.com/cn)

所有接口方法的初始化都与kucoin提供的方法相同。更多细节 [src/api](https://github.com/zhouaini528/kucoin-php/tree/master/src/Api)

很多接口还未完善，使用者可以根据我的设计方案继续扩展，欢迎与我一起迭代它。

[中文文档](https://github.com/zhouaini528/kucoin-php/blob/master/README_CN.md)

### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php)

[Okex](https://github.com/zhouaini528/okex-php)

[Huobi](https://github.com/zhouaini528/huobi-php)

[Binance](https://github.com/zhouaini528/binance-php)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

#### 安装方式
```
composer require linwj/kucoin
```

支持更多的请求设置 [More](https://github.com/zhouaini528/okex-php/blob/master/tests/spot/proxy.php#L21)
```php
$okex=new OkexSpot();
//You can set special needs
$okex->setOptions([
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

### Kucoin 交易 API

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

[更多用例请查看](https://github.com/zhouaini528/kucoin-php/tree/master/tests/kucoin)

[更多API请查看](https://github.com/zhouaini528/kucoin-php/tree/master/src/Api/Kucoin)

### Kumex 交易 API

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

[更多用例请查看](https://github.com/zhouaini528/kucoin-php/tree/master/tests/kumex)

[更多API请查看](https://github.com/zhouaini528/kucoin-php/tree/master/src/Api/Kumex)

<?php

require '../vendor/autoload.php';


$client = \YearDley\EasyTBK\Factory::jingdong([
    'app_key' => '91e005b22746d8e624a9b1356ca2d2b4',
    'app_secret' => 'cc9ab71a4ddf490b864d00a3773bd891',
    'format' => 'json'
]);

$request = new \YearDley\EasyTBK\JingDong\Request\JdUnionGoodsJingfenQueryRequest();
$request->setEliteId(1);
$request->setPageIndex(1);
$request->setPageSize(20);
print_r($client->execute($request));
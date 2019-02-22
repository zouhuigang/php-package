<?php

include_once "../src/Validation.php";
include_once "../src/Tool.php";


$ver = new \zouhuigang\package\Validation();
$tool = new \zouhuigang\package\Tool();

$result=$ver->is_email("957750120@qq.com");
var_dump($result);

$result=$ver->is_null("");
var_dump($result);

//获取年龄
$result=$tool->get_age("1992-01-01");
var_dump($result);
die;

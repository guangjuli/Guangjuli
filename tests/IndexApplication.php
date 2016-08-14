<?php
include("../vendor/autoload.php");
define('APPROOT', '../App/');

//错误提示
$error_reporting       = E_ALL ^ E_NOTICE;
ini_set('error_reporting', $error_reporting);
//error_reporting(0);
headers();

////对server调用db的测试
//$res = server('db')->getall('select * from user');
//D($res);



//application::data示例
//配置 config=>data
//$res = application('data');
//$res->get('name','asdfasdf');
//$rc = $res->get('name');

//
$nr = "
- 1
- 22
";
//$res = server('Parsedown')->text($nr);
//$res = application('Parsedown')->text($nr);
$res = application()->obList();;
D($res);







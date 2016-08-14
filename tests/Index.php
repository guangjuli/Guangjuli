<?php
include("../vendor/autoload.php");
define('APPROOT', '../App/');

//错误提示
$error_reporting       = E_ALL ^ E_NOTICE;
ini_set('error_reporting', $error_reporting);

//error_reporting(0);
//headers();

//$class = App\Model\Form::class;
//$res = class_exists($class);
//D($res);

//Application


//if(Model('RouterAdd')->isAddons()){
//两种执行方式
$res = Addons\Bootstrap::Run();


//$res = Addons\Bootstrap::getInstance()->getConfig();



//Addons\Bootstrap::routerRun('welcome/home/index/pa',['name'=>"irones"]);

//}else{
    //App\Bootstrap::run();
//}
D($res);
exit;




//

//server()->Help();

//application('demo')->run('../Document/');


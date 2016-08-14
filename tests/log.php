<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/11
 * Time: 15:35
 */












use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Stand');
$log->pushHandler(new StreamHandler('../Cache/Log/log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');


exit;






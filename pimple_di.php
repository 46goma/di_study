<?php
require_once 'vendor/autoload.php';
require_once './config_container.php';
require_once './class_for_di.php';

$container['song.title'] = 'hoge';
$otoge = $container['otoge'];
$otoge->play();
$otoge->tweet();

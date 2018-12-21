<?php
/**
 * Created by PhpStorm.
 * User: jinchunguang
 * Date: 18-12-21
 * Time: 下午5:50
 */

require_once "phar://myapp.phar/common.php";
$config = parse_ini_file("config.ini");
AppManager::run($config);



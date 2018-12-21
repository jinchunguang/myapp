<?php
/**
 * Created by PhpStorm.
 * User: jinchunguang
 * Date: 18-12-21
 * Time: 下午5:50
 */
class AppManager
{
    public static function run($config) {
        echo "Application is now running with the following configuration... ";
        var_dump($config);
    }
}
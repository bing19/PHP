<?php


class StorageFactory
{
    public static function factoryStorage() {
        $conf = new Config();
        $config = $conf->getConfig();
        $writeMethod = new $config['cacheMethod'];

        return $writeMethod;


    }

}
<?php


class StorageFactory
{
    public static function factoryStorage($config) {
        $config = $config->getConfig();
        $writeMethod = new $config['cacheMethod'];

        return $writeMethod;


    }

}
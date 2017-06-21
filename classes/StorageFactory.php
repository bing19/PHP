<?php


class classes_StorageFactory
{
    public static function factoryStorage() {
        $config = new config_config();
        $writeMethod = $config->getConfig();

        return new $writeMethod;


    }

}
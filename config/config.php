<?php

class config_config {
   private $config = [
        'cacheMethod' => 'classes_StorageFile2'
   ];

    public function getConfig () {
        $cacheMethod = $this->config;
        return $cacheMethod['cacheMethod'];
    }
}

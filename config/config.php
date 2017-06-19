<?php

class config_config {
   private $config = [
        'cacheMethod' => 'classes_StorageFile1'
   ];

    public function getConfig () {
        return $this->config;
    }
}

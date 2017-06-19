<?php

class Config {
   private $config = [
        'cacheMethod' => 'StorageFile2'
   ];

    public function getConfig () {
        return $this->config;
    }
}

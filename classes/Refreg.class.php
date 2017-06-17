<?php

/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 17.06.17
 * Time: 22:11
 */
class Refreg
{
    protected $storage = [];
    protected $model;
    protected $config;
    protected $hasError = false;

    const fresh_eat = 'fresh';
    const frozen_eat = 'frozen';

    public function initStorage () {
        $this->storage = [
            self::fresh_eat => [],
            self::frozen_eat => []
        ];
    }

    public function __construct($model, iFrozeConfig $config)
    {
        $this->model = $model;
        $this->config = $config;
        $this->hasError = true;
        
        $this->initStorage();
    }

    public function lookStorage () {
        return $this->storage;
    }

    public function getMaxFreshWeigth () {
        $config = $this->config;
        return $config->getMaxFreshWeigth();
    }

    public function getMaxFrozeWeigth () {
        $config = $this->config;
        return $config->getMaxFrozeWeigth();
    }


    public function addFreshEat ($name) {
        $config = $this->config;

        if ($config->validateFresh($name) == true) {
            $this->storage[self::fresh_eat] = $name;

        }
    }
}
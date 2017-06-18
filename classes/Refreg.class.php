<?php

/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 17.06.17
 * Time: 22:11
 */
class Refreg
{
    protected $storage = []; // Хранилище холодильника
    protected $model; // Модель
    protected $config; // Конфиг в котором будет лежать объек конфигурации максимального объема камер


    const fresh_eat = 'Камера холодильника'; // Костанты для задания Ключей массива при инициализации Хранилища
    const frozen_eat = 'Морозилка';

    public function initStorage () { // Метод для инициализации структуры массива хранилища
        $this->storage = [
            self::fresh_eat => [],
            self::frozen_eat => []
        ];

    }

    public function __construct($model, iFrozeConfig $config)
    {
        $this->model = $model;
        $this->config = $config;

        $this->initStorage();
    }

    public function lookStorage () {
        return $this->storage;
    }
    public function lookConfig () {
        return $this->config;
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
            $this->storage[self::fresh_eat][] = $name;
            echo $name->getName() . ' добавлен в холодильник'  . '<br>' ;

        }
    }
}
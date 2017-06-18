<?php

class Refregerator
{
    protected $storage = []; // Хранилище холодильника
    protected $model; // Модель
    protected $config; // Конфиг в котором будет лежать объек конфигурации максимального объема камер

    static private $ins = NULL;

    public $count = 1;

    const fresh_eat = 'Камера холодильника'; // Костанты для задания Ключей массива при инициализации Хранилища
    const frozen_eat = 'Морозилка';

    public function initStorage () { // Метод для инициализации структуры массива хранилища
        $this->storage = [
            self::fresh_eat => [],
            self::frozen_eat => []
        ];
    }

    static public function getInstance () {
        if (self::$ins instanceof self) {
            return self::$ins;
        }
    return self::$ins = new self;
}

    private function __construct()
    {
        echo 'Холодильник Snaige создан';
        $this->model = 'Snaige';
        $config = new Config(180, 100);
        $this->config = $config;
        $this->initStorage();
    }

    public function checkObj () {
        return $this->count++;
    }

    private function __clone () {}

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
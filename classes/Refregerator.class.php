<?php

class Refregerator
{
    protected $storage = []; // Хранилище холодильника
    protected $model; // Модель
    protected $config; // Конфиг в котором будет лежать объек конфигурации максимального объема камер

    static private $obj= NULL;

    public $count = 1; // Счетчик для проверки работы с объектом. Работаем ли мы с ним или создается новый

    const fresh_eat = 'Камера холодильника'; // Костанты для задания Ключей массива при инициализации Хранилища
    const frozen_eat = 'Морозилка';

    public function initStorage () { // Метод для инициализации структуры массива хранилища
        $this->storage = [
            self::fresh_eat => [],
            self::frozen_eat => []
        ];
    }

    static public function getInstance () { // Статическая функция для создания объекта
        if (self::$obj instanceof self) { // Если в $obj содержится объект данного класа. Значит TRUE, вернет объект
            return self::$obj;
        }
    return self::$obj = new self; // Если False создаем объект и ложим его в $obj
    }

    private function __construct() // Закрываем доступ к функции конструктору
    {
        echo 'Холодильник Snaige создан';
        $this->model = 'Snaige';
        $config = new Config(180, 100);
        $this->config = $config;
        $this->initStorage();
    }

    public function checkObj () { // Метод для проверки работы с объектом
        return $this->count++;
    }

    private function __clone () {} // закрываем возможность клонирования данного объекта

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
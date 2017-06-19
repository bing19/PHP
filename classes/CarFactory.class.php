<?php


class CarFactory
{
    public static function factory($car) {
        $class_name = $car; // Допустим, название класса и машины у нас совпадают
        require ($car . '.php'); // Допустим, название класса и файла тоже совпадают
        $object = new $class_name;
        return $object;
    }

}
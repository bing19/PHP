<?php


abstract class Storage
{
    const APP_ROOT = __DIR__;
    const DS = DIRECTORY_SEPARATOR;

    abstract protected function write ($data);

}
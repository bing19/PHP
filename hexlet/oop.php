<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 08.06.17
 * Time: 19:17
 */

class app {
    public $name = 'Eugene';
}

$ap = new app;
$ap->name = 'Dick';

echo $ap->name;
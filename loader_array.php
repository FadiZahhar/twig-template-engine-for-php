<?php

require_once 'vendor/autoload.php';

class Person {
    public $firstName = "John";
    public $lastName = "Doe";
}

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello, {{person.firstName}} {{person.lastName}}'
));

$twig = new Twig_Environment($loader);

echo $twig->render('index', array('person' => new Person()));
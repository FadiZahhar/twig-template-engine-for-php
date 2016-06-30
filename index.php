<?php

require_once 'vendor/autoload.php';

class Person {
    public $firstName = "John";
    public $lastName = "Doe";
}

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);

echo $twig->render('greeting.html', array('person' => new Person()));
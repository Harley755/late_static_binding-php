<?php

use Class\ChildClass;
use Class\ParentClass;

require "../vendor/autoload.php";


$parent = new ParentClass();
$child = new ChildClass();

// var_dump(ParentClass::getName(), ChildClass::getName());

var_dump($parent->factory());
var_dump($parent->factory());
var_dump($parent->factory());

echo '<br/><br/>';

var_dump($child->factory());
var_dump($child->factory());
var_dump($child->factory());

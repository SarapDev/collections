<?php

class MyClass
{

}

class MyAnotherClass
{

}

$newClass = new MyClass();
$diffClass = new MyAnotherClass();

var_dump(checkWork(MyClass::class, $newClass));
var_dump(checkWork(MyClass::class, $diffClass));
var_dump(checkWork('string', 'string'));

function checkWork(string $type, mixed $obj): string {
    if (is_object($obj) && $obj instanceof $type) {
        return "It is work";
    } return "That don't work";
}
<?php

class Engine {

    public $EJ;

    public function __construct($t) {
        $this->EJ = $t;
    }

}

$Engine = new Engine('EJ15');
$Engine2 = new Engine('EJ16');
$Engine3 = new Engine('EJ18');
$Engine4 = new Engine('EJ20');
$Engine5 = new Engine('EJ22');
$Engine6 = new Engine('EJ25');

var_dump($Engine->EJ);
var_dump($Engine2->EJ);
var_dump($Engine4->EJ);
var_dump($Engine5->EJ);
var_dump($Engine6->EJ);

echo "\n";
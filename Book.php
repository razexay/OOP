<?php

class Book {

    protected $title;
    protected $inStock = true;
    public $stockSaldo = 0;

    public function __construct($t) {
        $this->title = $t;
    }

    public function getstockSaldo() {
        return $this->stockSaldo;
    }

    public function setstockSaldo($v){
        if ( $v < 0 ) {
            throw new Exception('Peaks nagu negatiivne olema');
        } else {
            $this->stockSaldo = $v;
        }
    }
        public function soldOut(){
            $this->inStock = false;
        }
}

$book = new Book('Kalevipoeg');
$book2 = new Book('Rehepapp');

$book->soldOut();
$book2->setstockSaldo(-15);

var_dump($book);
var_dump($book2);

echo "\n";
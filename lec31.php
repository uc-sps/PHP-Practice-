<?php

class Transaction {

    public $amount;
    public $name;

    public function __construct(float $amount, string $name){
        $this->amount = $amount;
        $this->name = $name;
    }
    public function addDiscout($disc_amt){

        $this->amount = $disc_amt - ($this->amount / 100 * $disc_amt);

        return $this;
         
    }
    public function addTax($tax){
        $this->amount = $tax + $this->amount;
        return $this;
    }
    
    public function getTotal() : float{
        return $this->amount;
    }
}

$new_transaction = new Transaction('120', 'First Transaction');

$new_transaction->addDiscout(20)->addTax(30);
// $new_transaction;
var_dump($new_transaction->getTotal());
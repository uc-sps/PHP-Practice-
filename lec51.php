<?php
namespace App ;
class Transaction
     /**
      * Some description
      *
      * @param Customer $customer
      * @param float $amount
      * @throws \RuntimeException
      * @throws \AInvalidArgumentException
      * @return bool
      */
     public function process (Customer $customer, float $amount): bool
         // process transaction
         // if failed, return false
         // otherwise return true
         return true;

echo "hello world";
?>
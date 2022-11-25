
<?php
//clone function 
class a
{
        public function __construct()
        {
                echo "constructor Called <br>";
        }

        public function __clone()
        {
                echo "clone function called <br>";
        }
}

$var = new a();
$cloneVar = clone $var;

var_dump($var);
echo "<br>";
var_dump($cloneVar);
?>
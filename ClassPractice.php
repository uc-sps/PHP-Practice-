<?php
// class
/*
class Transaction {
        public $amount;
        public $desc;

        public function __construct(int $a , string $b)
        {
                $this->amount = $a;
                $this->desc = $b;
        }
        public function discount(float $x)
        {
                $this->amount -= $this->amount * $x/100;
        }

};

$t1 = new Transaction(500, "It is my first transaction");
 $t1->discount(10);
echo $t1 ->amount ."<br>";
var_dump($t1);

$obj = new \stdClass();
$obj->a= 1;
$obj->b = 2;
var_dump($obj);

echo "<br>";
$arr = [1,3,5];
var_dump((object)$arr);
echo "<br>";
$str ='{"a":1,"b":2,"c":3}';
$arr = json_decode($str);
var_dump($arr->c);

class Transaction
{
        private $customer = 13;
        public function __construct(
                private $amount,
                private ?string $desc= null
        )
        {
           
                var_dump($this->desc);
        }

};
$t1 = new Transaction(500);



function spl_autoload_register($class){
        require "Practice/".$class.".php";
        
    }
    $y=new Base1();
    $x=new Base2();
    spl_autoload_register('myAutoload');



function myAutoload($class)
{
        require "Practice/".$class.".php";
}

$y= new Base1();
$x = new Base2();



// constants in class
class a{
        public const CONST1 = "constant 1";
        private const CONST2 = "constant 2";
        public function __construct(){
                var_dump(self::CONST2);
        }
};

$a = new a();


// static in class
class a{
        private static $count = 0;
        public const CONST1 = "constant 1";
        private const CONST2 = "constant 2";
        public function __construct(){
                self::$count = self::$count+1;
                
        }

        public static function getcount()
        {
                echo self::$count ."<br>";
        }
};

$x = new a();
$b = new a();
$c = new a();
$d = new a();
a::getcount();

// Encapsulation 

class a{
       
        private  $var1;
        public function __construct($x){
               $this->var1= $x;
               echo "constructor of class A" ."<br>";
        }
        final public function getvar1()
        {
                echo "getvar of class a <br>";
                return $this->var1;
        }
        // function setvar1($x)
        // {
        //         $this->var1 = $x;
        // }
};
// inheritance
class b extends a{

        public function __construct($x)
        { 
                parent::__construct($x);
                echo "constructor of class b <br> ";
                
        }
        // public function getvar1()
        // {
        //        return parent::getvar1();
        // }
        private $var1;
}

$obj = new b(12); //object of class b 

$x = $obj->getvar1();
echo $x;

// final keyword is prevent function to override

// abstract class

abstract class student{
        public $name;
        public function __construct($name)
        {
                $this->name= $name;
        }
        abstract public function details();
}
class s1 extends student{
        public function details()
        {
                echo "This is $this->name <br> ";
        }
}
class s2 extends student{
        public function details()
        {
                echo "This is $this->name <br> ";
        }
}

$objs1 = new s1("surya");
$objs2 = new s2("harsh");

$objs1->details();
$objs2->details();

//interface in php 

interface student
{
        public function details();
}

interface course
{
        public function courseDetails();
}

class s1 implements student, course
{

        public function __construct(public $name, public $courseName)
        {
                $this->name = $name;
                $this->courseName = $courseName;
        }

        public function details()
        {
                echo "This is s1 $this->name <br> ";
        }
        public function courseDetails()
        {
                echo "This is s1 $this->name's $this->courseName <br> ";
        }

}
class s2 implements student
{
        public function __construct(public $name, public $courseName)
        {
                $this->name = $name;
                $this->courseName = $courseName;
        }
        public function details()
        {
                echo "This is s1 $this->name <br> ";
        }
        public function courseDetails()
        {
                echo "This is s1 $this->name's $this->courseName <br> ";
        }
}

$objs1 = new s1("Surya ","CSE");
$objs2 = new s2("Harsh", "IT");

$objs1->details();
$objs1->courseDetails();

$objs2->details();
$objs2->courseDetails();



// __get magic method

class a
{
        private $x =['one'=>1,'two'=>2,'three'=>3];

        private $a ;

        public function __get($key)
        {
                if(array_key_exists($key,$this->x))
                return $this->x[$key];
                else
                  echo "key is not available <b>";
        }

        public function __set($property, $value)
        {
                if(property_exists($this,$property))
                $this->$property=$value;
                else
                echo "this is private ";
        }
        public function geta()
        {
                echo $this->a;
        }

}


$obj = new a();
echo $obj->x;

//__set method 

$obj->a = 85;
$obj->geta();


//late static binding

class a
{
        protected static $name = 'surya';
        public function getname()
        {
                //echo static::$name;
                echo static::$name;

        }
}
class b extends a
{
        protected static $name = "harsh";
}
$obj = new b();
$obj->getname();

//traits

trait hello{
        public function sayHello()
        {
                echo "hello, it is trait function <br>";
        }
}
class a{
        use hello;
}
class b{
        use hello;
}

$obja = new a();
$objb = new b();
$obja->sayHello();
$objb->sayHello();


// anonymous class
$obj = new class(1,2,4)
{
        public function __construct(public $a, public $b, public $c)
        {

        }
};
var_dump($obj);
*/

class a{
        public function __construct(public int $int,public string $str)
        {
                echo $int ." ". $str."<br>" ;
        }
        
}
class b{
        public function __construct(public int $int,public string $str)
        {
                echo $int ." ". $str."<br>";
        }

}
$obj1  = new a(10,"surya");
$obj2  = new a(10,"surya");

var_dump($obj1 == $obj2);
echo "<br>";
var_dump($obj1 === $obj2);





?>
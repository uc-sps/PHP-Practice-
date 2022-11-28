<?php
// errors in php 
class myException extends Exception
{
        function errorMessage()
        {
                echo "Exception Message:" . $this->getMessage();
                echo "<br> error on line no :" . $this->getLine();
        }
}
function division($n)
{
        try {
                if ($n <= 0) {
                        throw new InvalidArgumentException("Enter the valid number.");
                } else if ($n == 5) {
                        throw new myException("number is 5");
                }
                $div = 2 / $n;
                echo $div ."<br>";
        } catch (Exception $e) {
                echo $e->getMessage() . "<br>";
                echo $e->getLine() . "<br>";
                echo $e->getCode() . "<br>";
                echo $e->getFile() . "<br>";

        } catch (myException $error) // it is a custom exception 
        {
                $error->errorMessage();
        } finally {
                echo "finally:::: <br>";
        }
}

division(2);
division(0);
division(5);
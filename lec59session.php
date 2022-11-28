<?php
session_start();
$_SESSION["favColour"] = "Orange";

print_r($_SESSION);
echo "<br>";
echo $_SESSION["favColour"];
echo $_SESSION["favColour"];

session_unset(); // uses to unset session it is done before 
// deleting the session 

session_destroy(); // used to delete session 


?>
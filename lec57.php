<!DOCTYPE html>
<html>
<body>

<?php 
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

/*
 $GLOBALS,$_SERVER,$_REQUEST,$_POST,$_GET,$_FILES,$_ENV,$_COOKIE,$_SESSION
are super globals 
*/

addition();
echo $z;
?>

</body>
</html>

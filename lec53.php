<?php
//serializaable 
$data1 = serialize(array("Red", "Green", "Blue"));
echo $data1."<br>";

var_dump(unserialize($data1));

?>
<?php
$result = $_POST['datetime'];
echo $result."\n";
$b = strtotime($result);
echo date('Y-m-d H:i:s',$b)."\n";

var_dump($result);

?>

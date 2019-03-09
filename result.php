<?php
$result = $_POST['datetime'];
echo $result."\n";
$b = strtotime($resuult);
echo date('Y-m-d H:i:s',$b)."\n";

var_dump($result);

?>

<?php
$a = ['X'=>'Japan', 1000=>'Sakura', 'Z'=>'Hello'];
var_dump($a);
echo "<br/>"."<br/>";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br/>";
}
?>

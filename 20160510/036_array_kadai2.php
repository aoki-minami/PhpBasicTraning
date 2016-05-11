<?php
$a = array(0, 1, 2, 3, 4);

foreach($a as $a_value){
    echo $a_value;
    echo "<br>";
}

$a[5] = "研修";

foreach($a as $a_key => $a_value){
    echo $a_key . " " . $a_value . "<br>";
}

?>

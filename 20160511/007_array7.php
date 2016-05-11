<?php
$a = array(array('AA', 'AB'), array('BA', 'BB'), array('CA', 'CB'));
var_dump($a);

echo "<br>";
echo "<br>";

foreach($a as $key1 => $value1){
    foreach($value1 as $key2 => $value2){
        echo $key1 . " " . $key2 . " " . $value2 . "<br>";
    }
}

?>

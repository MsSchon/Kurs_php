<?php
//deine a csv string
$string = "value1, value2, value3";

//explode string to an array
$array = explode(',', $string);

//output array so we can se the content
var_dump($array);

// associative array
$assArray = array(
  'name' => 'andreas',
  'hungry' => true
);
  echo '<br>';
  var_dump($assArray);

$assArray['name'];
$array[0];
<?php
/* byt färg på en knapp */

class MS_Button
{
  public $color;
  
  public function getColor()
  {
     $randomIndex = rand(0,2);
      $options = array(
        0 => 'value1',
        1 => 'value2',
        2 => 'value3',
      );
    
  return $options[$randomIndex];
  }
  
}

$myButton = new MS_Button();


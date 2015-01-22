<?php

class MS_Button
{
  public $color;
  /* byter/randomiserar färg på knappen */
  public function getColor() {
    $randomIndex = rand(0,2);
    $options = array(
      0 => 'value1',
      1 => 'value2',
      2 => 'value3',
    );

    return $options[$randomIndex];
  }

  /*Ska räkna antalet sidvisningar */
  function increasePageview($currentCount) {
    return $currentCount+1;
  }

  /*
  *divide clicks by views in order to get the current conversion rate
  *@param int $clicks
  *@param int $views
  *
  *@return float
  */

  function calculateConversionRate($clicks, $views) {
    return $clicks / $views;
  }


  /*
  *Skriv datan tll filen och dela upp på radbryt
  */
  /*
  public function loadData()
  {
    $content = file_get_contents($this->storagePath);
    $data = explode("\n", $content);
    return $data;
  }*/


  /*
  * för att räkna alla klick på knappen
  */
  public function trackClick() { /*
    $data = $this->loadData();
    for ($index = 1; $index < count($data); $index++){
      $optionRow = $data[$index];
      $optionData = expolode(',' , $optionRow);
      if ($option == $optionData[0]) {
        $optionData[1] = $optiondata[1] +1;
        $optionRow = implode(',' , $optionData);
        $data[$index] = $optionRow;
        break;
      } 
      }*/
    }
   // $this->saveData($data);
  

  /*
  * för att räkna alla visningar
  */
  /*public function trackView($option) { 
    $data = $this->loadData();
    for ($index = 1; $index < count($data); $index++){
      $optionRow = $data[$index];
      $optionData = expolode(',' , $optionRow);
      if ($option == $optionData[0]) {
        $optionData[2] = $optiondata[2] +1;
        $optionRow = implode(',' , $optionData);
        $data[$index] = $optionRow;
        break;
      }
      //$this->saveData($data);
    } 

  }*/
}

$myButton = new MS_Button();
$views = 1;
$clicks = 1;
$options = 0;

$row = $clicks . " clicks," . $views . " views," . $options . "\n";

/*
*skriver data till fil, 
* ska skriva till fil men saknar en massa saker som jag inte
*förstår. Försökte ändra den så att det skulle passa min fil
* men det gick inte så bra. 
*/
/*  public function saveData($data) 
    $row = implode($data, "\n");
    $handle =fopen($this->storagePath, 'w+');

    if ($handle === false) {
      return false;
      }
      $result = fwrite($handle, $row);
      fclose($handle)
    */
/*
  *Spara resultatet till en CSV-fil. 
  */

//Öppna och skriv till fil
$my_file = 'data.csv';
$handle = fopen($my_file,'w+') or die('Cannot open file:  '.$my_file);
fwrite($handle, $row); 
fclose($handle);

/*$msButton = new MS_Button();
$msButton -> initializeStorage();

$button = new MS_Button();
$button->initilalizeStorage():
$option = $button->getOption();
$button->trackView($option);
*/
/*
*om man klickat på knappen så ska datan med valen skickas,
*annars ska bara view öka. dvs man har uppdaterat sidan
*manuellt.
*/
/*
if(array_key_exists('option', $_POST)){
     $button->trackClick($POST['option']);
}*/

?>
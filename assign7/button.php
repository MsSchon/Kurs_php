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
  * för att räkna alla klick på knappen
  */
  public function trackClick() {

  }
  /*
  * för att räkna alla visningar
  */
  public function trackView($currentCount) {
    {
      $data = this->loadData();
      for ($index = 1; $index < count($data); $index++){
        $optionRow = $data[$index];
        §$optionData = expolode(',' , $optionRow);
        if ($ == $optionData[0]) {
          $optionData[2] = $optiondata[2] +1;
          $optionRow = implode(',' , $optionData);
          $data[$index] = $optionRow;
          break;
        } (byt ut 2:an till en 1:a för att tracka click istället)
      }
      $this->saveData($data);
    }

  }
}

$myButton = new MS_Button();
$views = 1;
$clicks = 1;
$options = 0;

$row = $clicks . " clicks," . $views . " views," . $options . "\n";


/*
  *Spara resultatet till en CSV-fil. 
  */

//Öppna och skriv till fil
$my_file = 'data.csv';
$handle = fopen($my_file,'w+') or die('Cannot open file:  '.$my_file);
fwrite($handle, $row); 
fclose($handle);

?>
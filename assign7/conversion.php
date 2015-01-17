<?php
  /*öka antalet pageviews
  *take a value and add 1 to it,
  *@param int $currentCount
  *return int */
  
  function increasePageview($currentCount) 
  {
    return $currentCount +1;
  }
  
  /*
  *divide clicks by views in order to get the current conversion rate
  *@param int $clicks
  *@param int $views
  *
  *@return float
  */
  
  function calculateConversionRate ($clicks, $views)
  {
    return $clicks / $views;
  }
  $views = 0;
  $clicks = 0;
  $options = 0;

  $row = $clicks . "," . $views . "," . $options . "\n";

  //skicka datan och reloada sidan. 
  if (isset($_POST))
  {
      
  }
  /*
  *Spara resultatet till en CSV-fil. 
  */

  //Öppna och skriv till fil
  $my_file = 'data.csv';
  $handle = fopen($my_file,'w') or die('Cannot open file:  '.$my_file);
  fwrite($handle, $row);
  fclose($handle);
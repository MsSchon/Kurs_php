
<?php 
require_once('settings.php');
require_once('button.php');   
require_once('conversion.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Final push button</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="style.css"/>
</head>
  <body>
    <div class="content">
    <form action="assignment#7.php" method="submit">
  <input type="submit" value="LÄGG I KORG" name="<?php echo $myButton->getColor(); ?>" class="<?php echo $myButton->getColor(); ?>" /> 
      <!--prints orange white or green to the html markup --> 
      </br><p>Tryck på knappen om du vill</br>  <b>eller uppdatera</b> sidan </br>för att få en annan färg</p>
    </form>  
    </div
  </body>
</html>
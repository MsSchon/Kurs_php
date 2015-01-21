
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
    <?php 
var_dump($_POST);
?>
    <div class="content">
    <form action="." method="post">
      <input type="hidden" name="option" value="<?php echo $myButton->getColor(); ?>">
  <input type="submit" value="LÄGG I KORG" class="<?php echo $myButton->getColor(); ?>" /> 
      <!--prints orange white or green to the html markup --> 
      </br><p>Tryck på knappen om du vill</br>  <b>eller uppdatera</b> sidan </br>för att få en annan färg</p>
    </form>  
    </div
  </body>
</html>
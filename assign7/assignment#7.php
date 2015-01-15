/* skapa en knapp och byt färg på den */
<?php require_once('button.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Final push button</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="style.css"/>
</head>
  
  <body>
    <form>
  <input type="button" class="<?php echo $button->getColor(); ?>" /> 
      //prints orange white or green to the html markup
    </form>  
  </body>
</html>
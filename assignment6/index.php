<?php
    require_once('search.php');
?>
<!doctype html>
<html>
    <head>
        <title>Assignment #6 / Webbserverprogrammering / Ecommerce Institute</title>
        <style>
            body {
                font-family: Tahoma, sans-serif;
                font-weight: 200;
                padding: 0;
                margin: 0;
            }
            form {
                margin: 2em auto;
                width: 400px;
            }
            fieldset {
                border: 1px solid #ccc;
            }
            legend {
                font-size: 1em;
                font-weight: 700;
                letter-spacing: 1px;
                text-transform: uppercase;
            }
            input,
            textarea {
                border: 1px solid #ccc;
                box-sizing: border-box;
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                font-weight: 200;
                font-size: 1em;
                padding: 0.5em;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <form action="." method="get">
            <?php if (isset($_GET) && is_array($_GET) && $_GET['word']) { ?>
                <p><?php echo countWords($_GET['word']); ?></p>
                <p><a href=".">&laquo; New search</a></p>
            <?php } else { ?>
            <p><input type="search" name="word" value="" /></p>
            <?php } ?>
        </form>
    </body>
</html>
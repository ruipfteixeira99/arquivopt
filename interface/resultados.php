<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title>PARLARQUIVO</title>
    </head>
    <body>
        <div id="resultados">            
            <?php

            $pesquisa = $_POST['pesquisa'];

            echo "<p> A mostrar resultados para: " . $pesquisa . "<p>"

            ?>
        </div>       
    </body>
</html>

<?php include "header.html" ?>
<?php include "footer.html" ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exercice3 Obtenir Le Siècle</title>
    </head>
    <body>
    <form action="" method ="POST">
        <h2>Le factoriel d'un nombre</h2>
        <p>Annee: <input type="number" name="noms" >/p>
        <button type="submit" name ="submit" value ="valider">send</button>
        </form>

        <?php 
            if ( isset( $_POST['submit'] ) ) 
            {
                function getCentury() 
                {
                    
                    return ceil($_POST['noms'] / 100);
                } 
                echo  " nous sommes  au " .getCentury(). "siècle </br>";
            }
        ?>
    </body>
</html>
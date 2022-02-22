<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'password';
            
            //On établit la connexion
            $conn = mysql_connect($servername, $username, $password);
            
            //On vérifie la connexion
            if(!$conn){
                die('Erreur : ' .mysql_connect_error());
            }
            echo 'Connexion réussie';
        ?>
    </body>
</html>

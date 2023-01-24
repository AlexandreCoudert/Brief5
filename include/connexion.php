<?php
try
{
    // On se connecte à MySQL
    $pdo = new PDO('mysql:host=localhost;
                            dbname=brief5;
                            charset=utf8', 
                            'root', 
                            '');

    echo("connexion etablie depuis include!");

    
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>
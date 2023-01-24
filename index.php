<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
        

        <form method="post">
            Nom du Lien : <input type="text" name="code">
            <input type="submit" value="Ajouter">
        </form>

        <table>
        <tr>
            <th>nom</th>
            <th>lien</th>
            <th>description</th>
            <th>categorie</th>
        </tr>

        <?php
                //connexion vers la bdd
                include("include/connexion.php");

            // si tous va bien, on peut continuer

            // on récupère tout le contenu de la table lien
            $sql = 'SELECT lien.lien_nom, lien.lien_url, lien.lien_description, categorie.categorie_nom 
            FROM lien, categorie
            WHERE categorie.categorie_id = lien.categorie_id';
            $lienStatement = $pdo->prepare($sql);
            $lienStatement->execute();
            $datas = $lienStatement->fetchAll();

            // on affiche chaque table une à une 
            foreach($datas as $ligne) {
                echo "<tr>";
                    echo "<td>".$ligne['lien_nom']."</td>";
                    echo "<td>".$ligne['lien_url']."</td>";
                    echo "<td>".$ligne['lien_description']."</td>";
                    echo "<td>".$ligne['categorie_nom']."</td>";
                }

        ?>
        </table>   
        <a href="addbook.php"><input type=submit value=bonjour></a>
    </body>
</html>

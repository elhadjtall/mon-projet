<?php require_once('bd.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiche</title>
</head>
<body>
    <h1>Iinformation sur les articles</h1>
    <?php
    // je vais recuperer tout le contenu de la table
    $sqlQuery = 'SELECT * FROM article';
    $articleStatement = $bd->prepare($sqlQuery);
    $articleStatement ->execute();
    $articles = $articleStatement->fetchAll();

    //on affiche les commandes effectuer
    foreach($articles as $article){
        echo '<p> Article: ' .$article['article'] .'<p/>';
        echo '<p> Prix: ' .$article['prix'] .'<p/>';
        echo '<hr/>';
    }

    ?>
</body>
</html>
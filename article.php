<?php require_once('bd.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article</title>
</head>
<body>
    <h1>Commander vos articles</h1>
    <form action="" method="POST">
        <p><input type="text"    name="article" placeholder="article"></p>
        <p><input type="number"  name="prix"    placeholder="prix"></p>
        <p><input type="submit"  name="submit"  value="Commander"></p>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit']) AND isset($_POST['article']) AND isset($_POST['prix'])){
    // echo 'le champs existe';

    $article = trim(htmlspecialchars($_POST['article']));
    $prix    = trim(htmlspecialchars($_POST['prix']));
    if (empty($article) OR empty($prix)){
        echo "Un champs est vide";
    }
    elseif(strlen($article) < 2 OR strlen($article)> 50){
        echo "le nom est trop court ou trop long";
    }
    // enregistrer dans la base de données
    else{
        $sqlQuery = 'INSERT INTO article(article, prix) VALUES(:article, :prix)';
        $insertRecipe = $bd->prepare($sqlQuery);
        $insertRecipe->execute([
            'article' => $article,
            'prix'=> $prix,
        ]);
    }
}
?>
<?php require_once('bd.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription </h1>
    <form action="" method="POST">
        <p><input type="text"     name="nom"          placeholder="nom"></p>
        <p><input type="text"     name="prenom"       placeholder="prenom"></p>
        <p><input type="date"     name="date"         placeholder="date de naissance"></p>
        <p><input type="email"    name="email"        placeholder="email"></p>
        <p><input type="password" name="password"     placeholder="password"></p>
        <p><input type="submit"   name="submit"       value="submit"></p>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['date']) AND isset($_POST['email']) AND isset($_POST['password'])){
    // echo "le champ existe";
    $nom = trim(htmlspecialchars($_POST['nom']));
    $prenom = trim(htmlspecialchars($_POST['prenom']));
    $date = trim(htmlspecialchars($_POST['date']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));

    if(empty($nom) OR empty($prenom) OR empty($date) OR empty($email) OR empty($password)){
        echo "Remplissez tous les champs";
    }
    else{
        if(strlen($password) < 12){
            echo "le mot de pass est court";
        }
        else{
            //connexion à la base de données
            $sqlQuery = 'INSERT INTO inscription(nom, prenom, date, email, password) VALUES(:nom, :prenom, :date, :email, :password)';

            $insertRecipe = $bd->prepare($sqlQuery);

            $insertRecipe->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'date' => $date,
                'email' => $email,
                'password' => $password,
            ]);
            }
        }
    }

?>
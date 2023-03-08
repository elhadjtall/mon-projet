<?php require_once('bd.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="" method="POST">
        <p><input type="email"     name="email"      placeholder="email"></p>
        <p><input type="password"  name="password"   placeholder="password"></p>
        <p><input type="submit"    name="submit"     value="CONNEXION"></p>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit']) AND isset($_POST['email']) AND isset($_POST['password'])){
    // echo "le champs existe";
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));

    if(empty($email) OR empty($password)){
        echo "le champs est vide";
    }
    else {
        if (strlen($password) < 12){
            echo "le mot de passe est trop court";
        }
        elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Ceci n'est pas un mail";}
        else{
            
        }
    }
}


?>
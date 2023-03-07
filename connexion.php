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
    <form action="" medhot="POST">
        <p><input type="email"     name="email"      placeholder="email"></p>
        <p><input type="password"  name="password"   placeholder="password"></p>
        <p><input type="submit"    name="submit"     value="submit"></p>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    echo "le champs existe";
}


?>
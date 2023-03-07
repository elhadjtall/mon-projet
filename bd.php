<?php
$serveurname = 'localhost';
$username = 'root';
$password = '';
    $bd = new PDO("mysql:host=$serveurname;dbname=projet", $username, $password);
    $bd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "connexion reussie";


?>
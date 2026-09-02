<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$login = $_POST["login"];
$mdp = $_POST["mdp"];
$host = $_SERVER['HTTP_HOST']; // on récupère le nom de l’hôte
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // on récupère le début de l’URL
 // on redirige vers l’URL, en complétant les … par la nom de la page html
if ($login == "admin" && $mdp == "azerty"){
    header("Location: http://$host$uri/login.html");
} else {
    header("Location: http://$host$uri/profil.html");
}
?>


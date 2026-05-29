<?php
include("db.php");

if(isset($_POST['register'])){

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];

    $sql = "INSERT INTO CLIENT(nom,email,telephone,password)
     VALUES(
          '$nom',
          '$email',
          '$tel',
          '$password')";

    mysqli_query($conn,$sql);

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST">

<h1>Inscription</h1>

<input type="text"
name="nom"
placeholder="Nom complet"
required>

<input type="email"
name="email"
placeholder="Adresse Email"
required>

<input type="tel"
name="tel"
placeholder="Téléphone"
required>

<input type="password"
name="password"
placeholder="Mot de passe"
required>

<button name="register">
S'inscrire
</button>

<p>
Déjà un compte ?
<a href="login.php">Se connecter</a>
</p>

</form>
</body>
</html>
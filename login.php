<?php

session_start();

include("db.php");

$error = "";

if(isset($_POST['login'])){

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "SELECT * FROM client 
            WHERE email='$email' 
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        $_SESSION['nom'] = $user['nom'];

        $_SESSION['email'] = $user['email'];

        $_SESSION['tel'] = $user['telephone'];

        header("Location: home.php");

        exit();

    }else{

        $error = "❌ Email ou mot de passe incorrect";

    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Login</title>

<style>

body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#111;
    font-family:Arial;
}

form{
    background:#1e1e1e;
    padding:40px;
    width:350px;
    border-radius:15px;
    box-shadow:0 0 20px rgba(0,0,0,0.5);
}

h1{
    text-align:center;
    color:#FFD700;
    margin-bottom:25px;
}

input{
    width:100%;
    padding:14px;
    margin:10px 0;
    border:none;
    border-radius:8px;
    background:#2b2b2b;
    color:white;
    font-size:15px;
    box-sizing:border-box;
}

input:focus{
    outline:none;
    border:1px solid #FFD700;
}

button{
    width:100%;
    padding:14px;
    margin-top:15px;
    border:none;
    border-radius:8px;
    background:linear-gradient(90deg,#FFD700,#FF6B00);
    color:black;
    font-weight:bold;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    opacity:0.9;
}

p{
    text-align:center;
    color:white;
    margin-top:20px;
}

a{
    color:#FFD700;
    text-decoration:none;
}

.error{
    background:#ff4d4d;
    color:white;
    padding:12px;
    border-radius:8px;
    text-align:center;
    margin-bottom:15px;
}

</style>

</head>

<body>

<form method="POST">

<h1>Login</h1>

<?php

if($error != ""){

    echo "<div class='error'>$error</div>";

}

?>

<input type="email"
name="email"
placeholder="Adresse Email"
required>

<input type="password"
name="password"
placeholder="Mot de passe"
required>

<button type="submit" name="login">

Se connecter

</button>

<p>

Pas de compte ?

<a href="register.php">

Inscription

</a>

</p>

</form>

</body>

</html>
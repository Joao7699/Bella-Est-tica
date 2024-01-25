<?php
    session_start();

if(!isset($_SESSION['email'])){
    header('Location: ../login/login.php');
}

include_once('../login/config.php');
$con = mysqli_connect("localhost", "root", "", "database") or die("Conexão não estabelecida");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devic-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleadmin/header.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
    <div class="interface"><!--interface-->
        
        <div class="logo"><!--logo-->

                <a href="#../web/index.php">
                        <img  src="../img/logo07.png" alt="logo" width="115px" >
                </a>

          </div><!--logo-->

<nav class="menu-desktop">
<ul>
<div class="container">
           
    <?= $_SESSION['user_id'] ?? 'Usuário' ?></a></li>
    <li><a href="../login/logout.php">Sair</a></li>
</div>
</ul>
</nav>

</div><!--interface-->
</header>
<?php
    session_start();

if(!isset($_SESSION['user_id'])){
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
    <nav class="navbar">
        <div class="container">
            <a href="index.php">
                Bella Estética | Painel de Controle
            </a>
            <button class="button-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> <?= $_SESSION['user_name'] ?? 'Usuário' ?>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../login/logout.php"><i class="fa fa-sign-out"></i> Sair </a>
            </div>
           </li>
         </ul>
        </div>
</div>
</nav>


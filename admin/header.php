<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header('Location: ../login/login.php');
}

include_once('../login/config.php');
$con = mysqli_connect();  // con = connectDatabase 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/main.css">
    <?php
    ?>
</head>
<body>
    <!-- Navbar do dashboard -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                Chef em Casa | Painel de Controle
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> <?= $_SESSION['user_name'] ?? 'Usuário' ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="edit.php">
                                <i class="fa fa-user"></i> Perfil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../login/logout.php"><i class="fa fa-sign-out"></i> Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

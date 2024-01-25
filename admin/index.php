<?php
include_once('header.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleadmin/index.css">
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard do Admin</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fa fa-home">Início</i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-sign-out">Sair</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <?php
                    include_once('menu_sidebar.php');
                ?>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-action active"><i class="fa fa-tachometer">Dashboard</i></a>
                    <a href="#" class="list-group-item list-group-action"><i class="fa fa-users"></i>Usuários</a>
                    <a href="#" class="list-group-item list-group-action"><i class="fa fa-file">Agendamentos</i></a>
                </div>
            </div>
        <div class="col-md-9">
         <div class="row"> 

         <div class="col-md-4">
            <div class="card text-light bg-primary mb-3">
                <div class="card-header"><i class="fa fa-users"></i>Últimos usuários cadastrados</div>
                <div class="card-board">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Data de registro</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <th>Shin</th>
                                <th>Shin@gmail.com</th>
                                <th>2024-01-15 20:44:05</th>
                            </tr>
                        <tr>
                                <th>Kaka</th>
                                <th>Kaka@gmail.com</th>
                                <th>2024-01-15 20:55:04</th>
                            </tr>
                        </tbody>
</table>

<div class="col-md-6">
        <div class="card text-light bg-primary mb-3">
             <div class="card-header"><i class="fa fa-users"></i>Últimos agendamentos</div>
                <div class="card-board">
                    <table class="table table-striped">
                    <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Data e horário</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <th>Shin</th>
                                <th>2024-02-15 17:00</th>
                            </tr>
                        <tr>
                                <th>Kaka</th>
                                <th>2024-02-15 18:00</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
         </div>
</div>

</body>
</html>

<?php 
 include_once("footer.php");

 ?>
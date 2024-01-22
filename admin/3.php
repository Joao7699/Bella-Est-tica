<?php

  include_once('header.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleadmin/index.css">
    <title>Dashboard do Admin</title>
</head>
<body>
    <!-- Navbar do dashboard -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard do Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fa fa-home"></i> Início <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-sign-out"></i> Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo do dashboard -->
    <div class="container">
        <div class="row">
            <!-- Sidebar do dashboard -->
            <div class="col-md-3">
        <?php
                    include_once('menu_sidebar.php');
                ?>
            <!-- Sidebar do dashboard -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active"><i class="fa fa-tachometer"></i> Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Usuários</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-file"></i> Agendamentos</a>
                </div>
            </div>
            <!-- Main do dashboard -->
            <div class="col-md-9">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header"><i class="fa fa-users"></i> Usuários</div>
                            <div class="card-body">
                                <h5 class="card-title">2</h5>
                                <p class="card-text">Usuários cadastrados no site.</p>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <!-- Tabela 1 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-users"></i> Últimos Usuários Cadastrados</div>
                            <div class="card-body">
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
                                            <td>Shin</td>
                                            <td>Shin@gmail.com</td>
                                            <td>2024-01-15 20:44:28</td>
                                        </tr>
                                        <tr>
                                            <td>kakak</td>
                                            <td>kakak@gmail.com</td>
                                            <td>2024-01-17 21:24:07</td>
                                        </tr>
                                        <!-- Adicione mais linhas conforme necessário -->
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Tabela 2 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-file"></i> Últimos Agendamentos</div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Data e Horário</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                        <tr>
                                            <td>Shin</td>
                                            <td>2024-01-25 17:00</td>
                                        </tr>
                                        <tr>
                                            <td>kakak</td>
                                            <td>2024-01-25 16:00</td>
                                        </tr>
                                        <!-- Adicione mais linhas conforme necessário -->
                                    </tbody>                             
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php
  include_once('footer.php');

?>

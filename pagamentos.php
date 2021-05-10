<?php
session_start();
include('verifica_login.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!--Bootstrap 4-->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!--Favicom-->
    <link rel="shortcut icon" href="icon/favicon.png" type="image/x-icon" />

    <title>Psoftware - Pagamentos</title>
</head>

<body>
    <!--Inicio do Navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <!--Logo-->
        <a href="home.html" class="navbar-brand"> <strong>Ψ</strong> Psoftware</a>

        <!--Menu Hamburguer-->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--Navegação-->
        <div class="collapse navbar-collapse" id="nav-target">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <a href="home.php" class="nav-link"> <i class=" bi bi-person-fill"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a href="pacientes.php" class="nav-link">Pacientes</a>
                </li>
                <li class="nav-item">
                    <a href="consultas.php" class="nav-link">Consultas</a>
                </li>
                <li class="nav-item">
                    <a href="pagamentos.php" class="nav-link active">Pagamentos</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="nav-target">
            <ul class="navbar-nav ml-auto">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['usuario_nome']; ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Editar</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <!--FIM do Navbar-->

    <div id="main" class="container-fluid pt-3 m-auto">
        <div id="top" class="row">
            <div class="col-md-3">
                <h2>Pagamentos</h2>
            </div>

            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text" placeholder="Buscar pagamentos">
                    <input class="btn btn-warning" type="submit" value="Pesquisar">
                </div>
            </div>


            <!--TABELA -->
            <div id="list" class="row m-auto pt-4">

                <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Horário</th>
                                <th>Fatura</th>
                                <th>Valor</th>
                                <th class="actions">Opções</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Testenome</td>
                                <td>01/01/2021</td>
                                <td>13:00</td>
                                <td>Aberta</td>
                                <td>R$ 100,00</td>
                                <td class="actions">


                                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Atualizar Fatura</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Aberta</a><a class="dropdown-item" href="logout.php">Pago</a> <a class="dropdown-item" href="logout.php">Adiada</a>
                                        <a class="dropdown-item" href="logout.php">Cancelada</a>
                                    </div>

                                    <a class="btn btn-dark btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Testenome</td>
                                <td>01/01/2021</td>
                                <td>13:00</td>
                                <td>Pago</td>
                                <td>R$ 100,00</td>
                                <td class="actions">

                                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Atualizar Fatura</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Aberta</a><a class="dropdown-item" href="logout.php">Pago</a> <a class="dropdown-item" href="logout.php">Adiada</a>
                                        <a class="dropdown-item" href="logout.php">Cancelada</a>
                                    </div>

                                    <a class="btn btn-dark btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                </td>
                            </tr>
                            </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div> <!-- /#list -->



            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="js/bootstrap.min.js"></script>
</body>

</html>
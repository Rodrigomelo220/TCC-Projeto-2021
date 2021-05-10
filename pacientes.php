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

    <title>Psoftware - Pacientes</title>
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
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="pacientes.php" class="nav-link active">Pacientes</a>
                </li>
                <li class="nav-item">
                    <a href="consultas.php" class="nav-link">Consultas</a>
                </li>
                <li class="nav-item">
                    <a href="pagamentos.php" class="nav-link">Pagamentos</a>
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
                <h2>Pacientes</h2>
            </div>

            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar pacientes">
                    <input class="btn btn-warning" type="submit" value="Pesquisar">
                </div>
            </div>



            <div class="col-md-3">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Cadastrar paciente</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cadastro de Pacientes</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <form action="post">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" id="" placeholder="First name" value="Digite o nome" required>
                                    <label for="">Telefone</label>
                                    <input type="number" class="form-control" id="" placeholder="Telefone" value="Digite o telefone" required>

                                    <label for="">Email</label>
                                    <input type="email" class="form-control" id="" placeholder="Digite o email" required>

                                    <label for="">CPF</label>
                                    <input type="text" class="form-control" id="" placeholder="Digite o CPF" required>

                                    <label for="">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="" placeholder="Digite a data de nascimento" required>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <input type="submit" class="btn btn-success" value="Cadastrar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--TABELA -->
            <div id="list" class="row m-auto pt-4">

                <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Email</th>
                                <th>CPF</th>
                                <th>Data de nascimento</th>
                                <th class="actions">Opções</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Testenome</td>
                                <td>(14) 999999999</td>
                                <td>email@eail.com</td>
                                <td>123.456.789-01</td>
                                <td>01/01/2021</td>
                                <td class="actions">

                                    <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                                    <a class="btn btn-dark btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Testenome</td>
                                <td>(14) 999999999</td>
                                <td>email@eail.com</td>
                                <td>123.456.789-01</td>
                                <td>01/01/2021</td>
                                <td class="actions">

                                    <a class="btn btn-warning btn-xs" href="">Editar</a>
                                    <a class="btn btn-dark btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="js/bootstrap.min.js"></script>
</body>

</html>
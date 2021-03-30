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
  <link rel="shortcut icon" href="icon/favicon.png" type="image/x-icon"/>

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
                        <?php echo $_SESSION['usuario']; ?>
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
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
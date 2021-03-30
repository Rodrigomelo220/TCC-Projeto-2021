<?php

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

    <title>Psoftware - Cadastro</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="email"] {
            margin-bottom: -2px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

</head>

<body class="text-center bg-dark">
     
        <!--Inicio do Formulario-->
    <main class="form-signin">
        <form action="cadastrar.php" method="POST">
            <h1 class="text-warning">Ψ Cadastro</h1>
            <h1 class="h3 mb-3 fw-normal text-light"></h1>

            <p class="text-light">É muito simples se cadastrar no Psoftware!! </p>
            <p class="text-light">Basta preencher os campos abaixo.</p>
            
            <!--Alerts-->
            <div class="alert alert-success" role="alert">
            <h6 class="text-success"><strong>Cadastro Efetuado!!</strong></h6>
            <p>Faça seu login informando o seu email e senha <a class="text-success" href="index.php"><strong>aqui</strong></a>.</p>
            </div>

            <div class="alert alert-warning" role="alert">
            <h6 class="text-warnig">Atenção!!</h6>
            <p>O usuário já existe. Informe outro e tente novamente.</p>
            </p>
            </div>

            <!--Inputs de cadastro-->
            <div class="form-floating">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>

            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>

            </div>

            <!--BTNs de cadastrar e cancelar-->
            <div>
                <a class="w-49 btn btn-lg btn-danger mr-2" href="index.php"><strong>Cancelar</strong></a>
                <button class="w-49 btn btn-lg btn-warning " type="submit"> <strong>Cadastrar</strong></button>
            </div>

            <!--Rodapé-->
            <p class="mt-5 mb-3 text-muted">&copy; Ψ Psoftware - 2021 <br> Rodrigo Melo</p>
        </form>
    </main>



</body>

</html>
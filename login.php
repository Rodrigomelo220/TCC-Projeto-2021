<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) ||empty($_POST['senha'])) {
   header('Location: index.php');
   exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario_nome from usuario where usuario_email = '{$email}' and usuario_senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $email;
    header('Location: home.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}

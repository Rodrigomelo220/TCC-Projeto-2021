<?php
if(!$_SESSION['usuario_nome']) {
    header('Location: index.php');
    exit();
}

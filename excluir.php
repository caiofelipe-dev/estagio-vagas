<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

//CONSULTA A VAGA no banco de dados
$obVaga = Vaga::getVaga($_GET['id']);

//VALIDAR SE VAGA EXISTE
if(!$obVaga instanceof Vaga) {
    header('location: index.php?status=error');
    exit;
}

// Validação do POST
if(isset($_POST['excluir'])) {

    $obVaga->excluir();

    header('location: index.php?status=sucess');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';
?>
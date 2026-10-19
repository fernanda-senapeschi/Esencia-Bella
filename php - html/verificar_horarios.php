<?php
include_once('config.php');

$profissional = isset($_POST['profissional']) ? $_POST['profissional'] : '';
$data = isset($_POST['data']) ? $_POST['data'] : '';

$horarios_ocupados = [];

// Cria conexão com o banco de dados

?>
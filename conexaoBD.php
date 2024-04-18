<?php

$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '';
$db_name = 'api_rest_php';

// Conexão com o banco de dados usando MySQLi
$conexao = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Verifica se ocorreu algum erro na conexão
if ($conexao->connect_error) {
  die('Erro ao conectar com o banco de dados: ' . $conexao->connect_error);
} else {
  echo 'Conexão bem sucedida!';
}

?>
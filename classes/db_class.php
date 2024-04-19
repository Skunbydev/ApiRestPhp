<?php

class DB
{
  public static function connect()
  {
    $db_host = '127.0.0.1';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'api_rest_php';

    try {
      return new PDO("mysql:host={$db_host};dbname={$db_name};charset=UTF8;", $db_user, $db_pass);
    } catch (PDOException $e) {
      echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
    }
  }
}

?>
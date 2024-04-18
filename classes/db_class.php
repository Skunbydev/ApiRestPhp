<?php

class DB
{
  public static function connect()
  {
    $db_host = '127.0.0.1';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'api_rest_php';

    return new PDO("mysql:host={$db_host};dbname={$db_name};charset=UTF8;", $db_user, $db_pass);
  }
}

?>
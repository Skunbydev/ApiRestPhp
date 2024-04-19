<?php

if ($api == 'clientes') {

  if ($method == "GET") {
    include_once ("get.php");
  } elseif ($method == "POST" && isset($_POST['_method']) && $_POST['_method'] == "PUT") {
    include_once ("put.php");
  } elseif ($method == "POST" && isset($_POST['_method']) && $_POST['_method'] == "DELETE") {
    include_once ("delete.php");
  } elseif ($method == "POST") {
    include_once ("post.php");
  }
}



?>
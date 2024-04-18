<?php
if ($api == 'clientes') {
  if ($method == "GET") {
    $data_base = DB::connect();
    $resposta = $db->prepare("SELECT * FROM clientes ORDER by nome");
    $resposta->execute();
    $objeto = $resposta->fetchAll(PDO::FETCH_OBJ);
    var_dump($data_base);
  }
}
?>
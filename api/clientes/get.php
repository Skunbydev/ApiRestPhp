<?php

if ($acao == 'lista' && $parametro == '') {
  $data_base = DB::connect();
  $resposta = $data_base->prepare("SELECT * FROM clientes order by nome");
  $resposta->execute();
  $objeto = $resposta->fetchAll(PDO::FETCH_OBJ);

  if ($objeto) {
    echo json_encode(["Dados" => $objeto]);
  } else {
    echo json_encode(["Mensagem" => "Nenhum cliente encontrado"]);
  }
}
if ($acao == 'lista' && $parametro != '') {
  $data_base = DB::connect();
  $resposta = $data_base->prepare("SELECT * FROM clientes WHERE id= {$parametro}");
  $resposta->execute();
  $objeto = $resposta->fetchAll(PDO::FETCH_OBJ);

  if ($objeto) {
    echo json_encode(["Dados" => $objeto]);
  } else {
    echo json_encode(["Me nsagem" => "Nenhum cliente encontrado"]);
  }
}

?>
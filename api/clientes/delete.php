<?php

if ($acao == '' && $parametro == '') {
  echo json_encode(['Mensagem' => 'Rota não encontrada']);
}

if ($acao == 'delete/' && $parametro == '') {
  echo json_encode(['Mensagem' => 'Por favor, selecione um cliente']);
}

if ($acao == 'delete' && $parametro != '') {
  $sql = "DELETE FROM clientes WHERE id = {$parametro}";

  $db_connect = DB::connect();
  $resposta = $db_connect->prepare($sql);
  $execucao = $resposta->execute();
  if ($execucao) {
    echo json_encode(['Mensagem' => 'Dados deletados com sucesso!']);
  } else {
    echo json_encode(['Mensagem' => 'Dados não encontrado, confira se o cliente']);
  }

}
?>
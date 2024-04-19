<?php

if ($acao == '' && $parametro == '') {
  echo json_encode(['ERRO' => 'Caminho não encontrado']);
}
if ($acao == 'update' && $parametro == '') {
  echo json_encode(['ERRO' => "É necessário informar um cliente"]);
}
if ($acao == 'update' && $parametro != '') {
  array_shift($_POST);

  $sql = "UPDATE clientes SET ";
  $contador = 1;
  foreach (array_keys($_POST) as $indice) {
    if (count($_POST) > $contador) {
      $sql .= "{$indice} = '{$_POST[$indice]}', ";
    } else {
      $sql .= "{$indice} = '{$_POST[$indice]}' ";
    }
    $contador++;
  }
  $sql .= " WHERE id = {$parametro}";
  $data_base = DB::connect();
  $resposta = $data_base->prepare($sql);
  $execucao = $resposta->execute();
  if ($execucao) {
    echo json_encode(["Mensagem" => 'Dados foram atualizados com sucesso!']);
  } else {
    echo json_encode(["Mensagem" => 'Dados não foram atualizados, contate a raj tecnologia']);
  }

}






?>
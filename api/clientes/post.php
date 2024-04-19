<?php

$sql = "INSERT INTO clientes (";
$contador = 1;
foreach (array_keys($_POST) as $indice) {
  if (count($_POST) > $contador) {
    $sql .= "{$indice},";
  } else {
    $sql .= "{$indice}";
  }
  $contador++;
}

$sql .= ") VALUES (";
$contador = 1;

foreach (array_values($_POST) as $valor) {
  if (count($_POST) > $contador) {
    $sql .= "'{$valor}',";
  } else {
    $sql .= "'{$valor}'";
  }
  $contador++;
}


$sql .= ")";

$data_base = DB::connect();
$resposta = $data_base->prepare($sql);
$execucao = $resposta->execute();
if ($execucao) {
  echo json_encode(["Mensagem" => ' Dados foram implementados com sucesso!']);
} else {
  echo json_encode(["Mensagem" => 'Dados não foram implementados, contate a raj tecnologia']);
}



?>
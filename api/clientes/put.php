<?php



if ($acao == 'update' && $parametro == '') {
  echo json_encode(["ERRO" => "É necessário informar um cliente"]);
}




$data_base = DB::connect();
$resposta = $data_base->prepare("UPDATE * from clientes where {$parametro}");
$resposta->execute();
$objeto = $resposta->fetchObject(DB::OBJECT);


?>
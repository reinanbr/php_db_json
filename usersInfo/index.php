<?php

// Captura os dados da requisição GET
$ip = $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['REQUEST_URI'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$serverName = $_SERVER["SERVER_NAME"];

$timeSeconds = time();
$time = date('Y-m-d H:i:s');

// Define o caminho do arquivo JSON
$arquivo = "db/$url.json";

// Verifica se o arquivo JSON já existe
if (file_exists($arquivo)) {

  // Carrega o conteúdo do arquivo JSON em um array
  $dados = json_decode(file_get_contents($arquivo), true);

} else {

  // Cria um array vazio para armazenar os dados
  $dados = array();

}

// Adiciona os dados da requisição ao array correspondente ao IP
if (array_key_exists($ip, $dados)) {

  // Se o IP já existir no array, adiciona os dados à lista existente
  $dados[$ip][] = array('serverName'=>$serverName,'url' => $url,'time'=>$time, 'timeSeconds' => $timeSeconds,'userAgent'=>$userAgent);

} else {

  // Se o IP não existir no array, cria uma nova lista de dados para ele
  $dados[$ip] = array(array('serverName'=>$serverName,'url' => $url, 'time'=>$time, 'timeSeconds' => $timeSeconds,'userAgent'=>$userAgent));

}

echo 'sucess';

// Salva os dados atualizados no arquivo JSON
file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));

?>


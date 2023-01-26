<?php

// Ob<?php

// Obter informações do usuário
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['REQUEST_URI'];
$date = date("Y-m-d");
$time = date("H:i:s");

// Criar um array com as informações do usuário
$data = array(
  'user_agent' => $user_agent,
  'url' => $url,
  'date' => $date,
  'time' => $time
);




// // Lê o arquivo user_data.json
// $json_data = file_get_contents('acess.json');

// // Converte a string JSON em um array
// $existing_data = json_decode($json_data, true);

// // Adiciona as novas informações ao array existente, agrupado pelo IP
// if(array_key_exists($ip, $existing_data)){
//     array_push($existing_data[$ip], $data);
// }else{
//     $existing_data[$ip] = array();
//     array_push($existing_data[$ip], $data);
// }

// // Converte o array atualizado em uma string JSON


// // Converte o array atualizado em uma string JSON
// $json_data = json_encode($existing_data);

// // Salvar a string JSON atualizada no arquivo
// file_put_contents('acess.json', $json_data);

// ?>

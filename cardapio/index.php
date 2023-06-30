<?php

if (isset($_GET['filename']) && isset($_GET['content'])) {
  // pega o nome do arquivo da requisição GET
  $filename = $_GET['filename'];
  $filename = "db/$filename.json";

  // decodifica o conteúdo da requisição GET em um array associativo
  $content = json_decode($_GET['content'], true);

  // converte o array associativo em uma string JSON
  $json = json_encode($content);

  // salva a string JSON em um arquivo com o nome fornecido
  file_put_contents($filename, $json);
  
  // exibe uma mensagem de sucesso
  echo "Dados salvos com sucesso no arquivo $filename!";
}
else {
  // exibe uma mensagem de erro caso os parâmetros não estejam presentes na requisição GET
  echo "Parâmetros inválidos na requisição GET!";
}

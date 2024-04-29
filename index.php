<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "clientes";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // Define o modo de erro do PDO para exceção
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão realizada com sucesso!";
} catch(PDOException $e) {
  echo "Conexão falhou: " . $e->getMessage();
}


?>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "formulario_portifolio";
$port = 3306;

try {

  $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
  // echo "SUCESSO";
  
} catch (Exception $th) {
  
  // echo "ERRO";
}


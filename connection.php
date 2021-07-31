<?php
  try {
    $username = "root";
    $password = "";
  
    $pdo = new PDO('mysql:host=localhost;dbname=User_BD', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {
    echo 'Conexão não realizada. Erro: ' . $e->getMessage();
  }
?>
<?php
require "../../db_config.php";

// Verificar se o ID do banner foi enviado
if (!empty($_GET['id'])) {
  // Obter o ID do banner
  $id = $_GET['id'];
  deleteBlog($id);
  header('Location: ../blogs.php');
  exit();
} else {
  // Redirecionar para a página de lista de blogs se o ID do banner não for fornecido
  header('Location: ../blogs.php');
  exit();
}

// Função para excluir um banner pelo ID
function deleteBlog($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM blogs WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

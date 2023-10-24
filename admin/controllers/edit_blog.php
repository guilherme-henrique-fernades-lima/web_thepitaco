<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $categorie_id = $_POST['categorie_id'];

 // Verificar se uma nova imagem de perfil foi enviada
 if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
  $uploadDir = '../uploads/blogs/';
  $imgTmpName = $_FILES['img']['tmp_name'];
  $imgName = $_FILES['img']['name'];
  $uniqueName = uniqid() . '_' . $imgName;

  if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
    // Atualizar o caminho da nova imagem no banco de dados
    updateBlogImage($id, $uniqueName);
  } else {
    echo 'Erro ao fazer o upload da imagem de perfil.';
    exit;
  }
}

// Verificar se novas imagens foram enviadas
if (isset($_FILES['imagens']) && !empty($_FILES['imagens']['name'][0])) {
  $imagesDir = '../uploads/blogs/';
  $imagesPaths = array();
  $totalFiles = count($_FILES['imagens']['name']);

  for ($i = 0; $i < $totalFiles; $i++) {
    $imageTmpName = $_FILES['imagens']['tmp_name'][$i];
    $imageName = $_FILES['imagens']['name'][$i];
    $imageUniqueName = uniqid() . '_' . $imageName;

    if (move_uploaded_file($imageTmpName, $imagesDir . $imageUniqueName)) {
      $imagesPaths[] = $imageUniqueName;
    } else {
      echo 'Erro ao fazer o upload de uma das imagens.';
      exit;
    }
  }

  // Atualizar as imagens no banco de dados
  updateBlogImages($id, $imagesPaths);
}

    updateBlog($id, $name, $description, $categorie_id);
    header('Location: ../blogs.php');
    exit();
  }
} else {
  header('Location: ../blogs.php');
  exit();
}

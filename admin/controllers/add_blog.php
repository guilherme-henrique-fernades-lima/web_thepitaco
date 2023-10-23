<?php
require "../../db_config.php";

$name = $_POST['name'];
$description = $_POST['description'];
$categorie_id = $_POST['categorie_id'];
$imagens = [];
$link = $_POST['link'];
$video = $_POST['video'];

$uploadDir = '../uploads/blogs/';

$imgPath = null;

if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
  $imgTmpName = $_FILES['img']['tmp_name'];
  $imgName = $_FILES['img']['name'];

  $uniqueName = uniqid() . '_' . $imgName;

  if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
    $imgPath = $uniqueName;
  } else {
    echo 'Erro ao fazer o upload da imagem.';
    exit;
  }
}

$sql = "INSERT INTO blogs (name, description, categorie_id, img, link, video) VALUES (?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $description,  $categorie_id, $imgPath, $link, $video]);
header('Location: ../blogs.php');

<?php
function updateCategorie($id, $name)
{
  global $pdo;
  if ($id) {
    $stmt = $pdo->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateNoticias($id, $name, $description, $categorie_id, $img)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE noticias SET name = :name, description = :description, categorie_id = :categorie_id, img = :img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE noticias SET name = :name, description = :description, categorie_id = :categorie_id WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

// Função para atualizar as imagens do usuário
function updateSedesImages($userId, $newImagesPaths)
{
  global $pdo;

  try {
    // Atualizar o campo de imagens do usuário
    $imagesPathsString = implode(',', $newImagesPaths);
    $sqlUpdate = "UPDATE sedes SET imagens = ? WHERE id = ?";
    $stmtUpdate = $pdo->prepare($sqlUpdate);
    $stmtUpdate->execute([$imagesPathsString, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar as imagens do usuário: ' . $e->getMessage();
  }
}

function updateEspacoImage($userId, $newImagePath)
{
  global $pdo;

  try {
    $sql = "UPDATE espacos SET img = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$newImagePath, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar a imagem de perfil: ' . $e->getMessage();
  }
}

// Função para atualizar as imagens do usuário
function updateEspacoImages($userId, $newImagesPaths)
{
  global $pdo;

  try {
    // Atualizar o campo de imagens do usuário
    $imagesPathsString = implode(',', $newImagesPaths);
    $sqlUpdate = "UPDATE espacos SET imagens = ? WHERE id = ?";
    $stmtUpdate = $pdo->prepare($sqlUpdate);
    $stmtUpdate->execute([$imagesPathsString, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar as imagens do usuário: ' . $e->getMessage();
  }
}

function updateAlbumImage($userId, $newImagePath)
{
  global $pdo;

  try {
    $sql = "UPDATE espacos SET img = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$newImagePath, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar a imagem de perfil: ' . $e->getMessage();
  }
}

// Função para atualizar as imagens do usuário
function updateAlbumImages($userId, $newImagesPaths)
{
  global $pdo;

  try {
    // Atualizar o campo de imagens do usuário
    $imagesPathsString = implode(',', $newImagesPaths);
    $sqlUpdate = "UPDATE espacos SET imagens = ? WHERE id = ?";
    $stmtUpdate = $pdo->prepare($sqlUpdate);
    $stmtUpdate->execute([$imagesPathsString, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar as imagens do usuário: ' . $e->getMessage();
  }
}

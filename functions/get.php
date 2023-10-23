<?php
function getCategoriesblog()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories WHERE type = 'blog' order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllblogs()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT blogs.id, blogs.img, blogs.name, c.name as categorie_type FROM blogs INNER JOIN categories c ON blogs.categorie_id = c.id order by blogs.id desc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getblogs1()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM blogs where categorie_id = 4 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getblogs2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM blogs where categorie_id = 5 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getblog($id){
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM blogs where id = $id order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAlbumId($id){
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM album where id = $id order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAlbum()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM album order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
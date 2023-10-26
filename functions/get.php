<?php
function getCategories()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllBlogs()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT blogs.id, blogs.img, blogs.name, blogs.description, c.name as categorie_id FROM blogs INNER JOIN categories c ON blogs.categorie_id = c.id order by blogs.id desc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBlogs1()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM blogs where categorie_id = Teresina order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBlogs2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM blogs where categorie_id = Piauí order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBlogs3()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM blogs where categorie_id = Nacional order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBlog($id){
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM blogs where id = $id order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getLeads()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM leads order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBanners()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM banners order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
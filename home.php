<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

// $banners = getBanners();
// $blogs = getAllBlogs();
$blogs1 = getBlogs1();
$blogs2 = getBlogs2();
// $categories = getCategories();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './components/heads.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <?php include './components/navbar.php' ?>
    <?php include './components/blogs.php' ?>
    <?php include './components/footer.php' ?>
</body>

</html>
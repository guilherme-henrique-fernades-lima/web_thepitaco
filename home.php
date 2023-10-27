<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$blogs = getAllBlogs();
$blogs1 = getBlogs1();
$blogs2 = getBlogs2();
$blogs3 = getBlogs3();
$categories1 = getCategories1();
$categories2 = getCategories2();
$categories3 = getCategories3();
$URI = new URI();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './components/heads.php' ?>
</head>

<body>
    <?php include './components/banners.php' ?>
    <?php include './components/navbar.php' ?>
    <?php include './components/type-blogs.php' ?>
    <?php include './components/blogs.php' ?>
    <?php include './components/videos.php' ?>
    <?php include './components/footer.php' ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mobileMenuButton = document.querySelector('[data-collapse-toggle="mobile-menu-2"]');
            const mobileMenu = document.querySelector('#mobile-menu-2');

            mobileMenuButton.addEventListener("click", function() {
                const expanded = mobileMenuButton.getAttribute("aria-expanded") === "true";
                mobileMenuButton.setAttribute("aria-expanded", !expanded);
                mobileMenu.style.display = expanded ? "none" : "block";
            });
        });
    </script>

</body>

</html>
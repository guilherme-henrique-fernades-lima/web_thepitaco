<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$blogs = getAllBlogs();
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
    <?php include './components/quem-somos.php' ?>
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
<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$blogs = getAllBlogs();
$categorie = getAllCategories();
$URI = new URI();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './components/heads.php' ?>
</head>


<body>
    <?php include './components/banners.php' ?>
    <?php include "./components/navbar.php" ?>

    <div class="mx-auto max-w-7xl px-2 pt-4">
        <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14 pb-2">
            Nossas Notícias
        </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php foreach ($blogs as $blog) { ?>
                <div class="pt-2">
                    <div class="border border-transparent hover:border-color2 border-2 rounded-md">
                        <a class="grid grid-cols px-1 flex justify-center" href="<?php echo $URI->base('blog/' . slugify($blog['name'])); ?>">
                            <img class='lazy rounded-lg h-48 object-cover w-full' src='./admin/uploads/blogs/<?php echo $blog['img'] ?>' alt="<?php echo $blog['name']; ?>">
                            <div class="ml-4 mt-2">
                                <h1 class="text-color2 title-font text-lg font-semibold font-sans"><?php echo $blog['name']; ?></h1>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include "./components/footer.php" ?>

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
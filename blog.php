<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$blogs;
$URI = new URI();

function remove_simbolos_acentos($string)
{
    $string = trim(strtolower($string));
    $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýýþÿŔŕ?';
    $b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuuyybyRr-';
    $string = strtr($string, utf8_decode($a), $b);
    $string = str_replace(".", "-", $string);
    $string = preg_replace("/[^0-9a-zA-Z\.]+/", '-', $string);
    return utf8_decode(rtrim($string, "-"));
}


$url = explode("/", $_SERVER['REQUEST_URI']);
$idpost = $url[3];

$idpost2 = "";

$stmt = $pdo->prepare("SELECT * FROM blogs");
$stmt->execute();
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $string1 = remove_simbolos_acentos(utf8_decode($idpost));
        $string2 = remove_simbolos_acentos(utf8_decode($name));
        if ($string1 == $string2) {
            $idpost2 = $name;
            $blogs = getBlog($id);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "components/heads.php"; ?>
</head>

<body>
    <?php include "components/navbar.php"; ?>
    <div class="mx-auto max-w-7xl px-2 pt-4">
        <?php foreach ($blogs as $blog) { ?>
            <div class="mb-8 mt-4 rounded-xl p-2 shadow-md shadow-blue-200">
                <div class="flex justify-center">
                    <?php echo "<img class='lazy rounded-md h-full w-2/3 object-cover' src=" . $URI->base('/admin/uploads/blogs') . '/' . $blog['img'] . '>' ?>
                </div>
                <h1 class="text-color2 text-center mt-6 mb-6 text-3xl font-bold leading-9 tracking-tight dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14 flex justify-center"><?php echo $blog['name']; ?></h1>
                <div>
                    <h2 class="title-font mt-5 p-4 text-md mb-1">
                        <?php echo $blog['description']; ?>
                    </h2>
                </div>
            </div>
        <?php }
        ?>
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
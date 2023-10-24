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
</head>

<body>
    <?php include './components/navbar.php' ?>
    <section class="lg:w-full pt-20 pb-8 mx-auto lg:pb-16">
        <div class="pb-8 shadow-inner bg-white bg-opacity-70 shadow-md rounded-xl">
            <div class="max-w-screen-xl px-4 pt-8 mx-auto mb-3 text-center">
                <div class="flex justify-center"><a href="./home.php">
                        <img src="./assets/img/logo.png" class="logo" alt="logo" />
                    </a>
                </div>
                <h1 class="mt-5 text-blue-800 font-semibold lg:text-4xl text-xl">
                    Anuncie Aqui!
                </h1>
                <h2 class="mt-5 text-blue-800 font-semibold lg:text-2xl text-xl">
                    Deseja anunciar seus negocios aqui? Preencha o formulário abaixo e venha fazer uma parceria com a ThePitaco!
                </h2>
            </div>
            <form action="./admin/controllers/add_lead.php" method="post" class="relative bg-white rounded-lg shadow">
                <div class="p-4">
                    <div class="lg:w-2/3 px-4 pb-8 mx-auto lg:pb-16">
                        <div class="">
                            <label class="block my-2 text-md font-base text-gray-800">Nome Completo</label>
                            <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Seu nome completo" required="">
                            <label class="block my-2 text-md font-base text-gray-800 pt-2">Email</label>
                            <input type="text" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Email" required="">
                            <label class="block my-2 text-md font-base text-gray-800">WhatsApp</label>
                            <input type="text" name="whatsapp" id="whatsapp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="(99)9 0000-0000" required="">
                            <input type="hidden" name="type" id="type" value="PARCERIA">
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="text-white bg-blue-800  hover:bg-blue-500 mt-5 w-52 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
                        </div>
                    </div>
            </form>
        </div>
    </section>
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
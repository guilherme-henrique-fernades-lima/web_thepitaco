<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$blogs1 = getblogs1();
$blogs2 = getblogs2();
$URI = new URI();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>

<body>
  <?php include "components/navbar.php"; ?>
  <div class="mx-auto max-w-7xl px-2 pt-4">
    <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
      Notícias APCEF/PI
    </h1>

    <div class="grid lg:grid-cols-3 pt-4">

      <?php foreach ($blogs1 as $blogs1) { ?>
        <div class="mb-4 overflow-hidden rounded-xl px-4">
          <div class="h-4/5 w-full scale-100">
            <h1 class="text-color1 title-font mb-3 text-lg font-medium"><?php echo $blogs1['name']; ?></h1>
            <img class='lazy rounded-md h-52 w-full' src='./admin/uploads/blogs/<?php echo $blogs1['img'] ?>'>
            <a href="<?php echo $URI->base('blog/' . slugify($blogs1['name'])); ?>">
              <button class="mt-4 rounded-lg bg-color1 px-4 py-1 text-white drop-shadow-md hover:scale-105">
                Leia mais
              </button>
            </a>
          </div>
        </div>
      <?php }
      ?>
    </div>
    <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
      Notícias FENAE
    </h1>

    <div class="grid lg:grid-cols-3 pt-4">
      <?php foreach ($blogs2 as $blogs2) { ?>
        <div class="mb-4 overflow-hidden rounded-xl px-4">
          <div class="h-4/5 w-full scale-100">
            <h1 class="text-color1 title-font mb-3 text-lg font-medium"><?php echo $blogs2['name']; ?></h1>
            <img class='lazy rounded-md h-52 w-full' src='./admin/uploads/blogs/<?php echo $blogs2['img'] ?>'>
            <a href="<?php echo $URI->base('blog/' . slugify($blogs2['name'])); ?>">
              <button class="mt-4 rounded-lg bg-color1 px-4 py-1 text-white drop-shadow-md hover:scale-105">
                Leia mais
              </button>
            </a>
          </div>
        </div>
      <?php }
      ?>
    </div>
  </div>


  <?php include "./components/footer.php" ?>
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/lz.js"></script>
	<?php include "components/modal_form_contato.php"; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
<div class="mx-auto max-w-7xl px-2 pt-4">
  <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
    Notícias
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
<div class="mx-auto max-w-7xl px-2 pt-4">
  <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
    Notícias Atuais
  </h1>

  <div class="grid lg:grid-cols-3 pt-4">

    <?php foreach ($blogs as $blog) { ?>
      <div class="mb-4 overflow-hidden rounded-xl px-4">
        <div class="h-4/5 w-full scale-100">
          <h1 class="text-color1 title-font mb-3 text-lg font-medium"><?php echo $blog['name']; ?></h1>
          <img class='lazy rounded-md h-52 w-full' src='./admin/uploads/blogs/<?php echo $blog['img'] ?>'>
          <h1 class="text-color1 title-font mb-3 text-lg font-medium"><?php echo $blog['description']; ?></h1>
        </div>
      </div>
    <?php }
    ?>
  </div>
</div>

<div class="mx-auto max-w-7xl px-2 pt-4">
  <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
    Notícias
  </h1>

  <div class="grid lg:grid-cols-3 pt-4">
    <?php foreach ($blogs as $blog) { ?>
      <div class="mt-4 px-2">
        <div class="divblogs h-4/5 w-full scale-100">
          <h1 class="text-color1 title-font mb-3 text-lg font-medium"><?php echo $blog['name']; ?></h1>
          <img class='lazy rounded-md h-52 w-full' src='./admin/uploads/blogs/<?php echo $blog['img'] ?>'>
          <p class="text-color1 mb-3 text-md">
            <?php echo substr($blog['description'], 219, 140); ?>
          </p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

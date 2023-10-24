<div class="mx-auto max-w-7xl px-2 pt-4">
  <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
    Notícias
  </h1>

  <div class="grid lg:grid-cols-3 gap-4 pt-4">
    <?php foreach ($blogs as $blog) { ?>
      <div class="mt-4 px-2 hover:border hover:border-color2 hover:border-2 rounded-md">
        <a href="<?php echo $URI->base('blog/' . slugify($blog['name'])); ?>">
          <div class="divblogs">
            <h1 class="text-color2 title-font mb-4 text-lg font-semibold font-sans"><?php echo $blog['name']; ?></h1>
            <img class='lazy rounded-md h-52 w-full' src='./admin/uploads/blogs/<?php echo $blog['img'] ?>'>
            <p class="font-sans mt-2">
              <?php
              $description = $blog['description'];
              echo strlen($description) > 140 ? substr($description, 219, 175) . '...' : $description;
              ?>
            </p>
          </div>
        </a>
      </div>
    <?php } ?>
  </div>
</div>
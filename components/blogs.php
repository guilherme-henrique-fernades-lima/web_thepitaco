<div class="mx-auto max-w-7xl px-2 pt-4">
  <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
    Notícias
  </h1>

  <div class="flex flex-col">
    <?php foreach ($blogs as $blog) { ?>
      <div class="mt-4 px-2">
        <a class="flex items-center h-56 max-w-4xl border border-transparent hover:border-color2 border-2 rounded-md px-2" href="<?php echo $URI->base('blog/' . slugify($blog['name'])); ?>">
          <img class='lazy rounded-md h-48 cover' src='./admin/uploads/blogs/<?php echo $blog['img'] ?>'>
          <div class="ml-4">
            <h1 class="text-color2 title-font text-lg font-semibold font-sans"><?php echo $blog['name']; ?></h1>
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
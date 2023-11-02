<div>
    <div class="mx-auto max-w-7xl px-2 pt-4">
        <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14 pb-2">
            Destaques
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
</div>
<section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-2 mx-auto max-w-7xl pt-4">
    <?php foreach ($categories1 as $categorie1) { ?>
        <div class="mx-auto max-w-7xl px-2 pt-4">
            <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
                <?php echo $categorie1['name']; ?>
            </h1>
            <div class="flex flex-wrap">
                <?php foreach ($blogs1 as $blog1) { ?>
                    <div class="mt-4 px-1 w-full sm:w-1/2 md:w-1/3 lg:w-2/4">
                        <div class="border border-transparent hover:border-color2 border-2 rounded-md">
                            <a class="grid grid-cols px-1" href="<?php echo $URI->base('blog/' . slugify($blog1['name'])); ?>">
                                <img class='lazy rounded-lg h-48 w-full object-cover' src='./admin/uploads/blogs/<?php echo $blog1['img'] ?>' alt="<?php echo $blog1['name']; ?>">
                                <div class="ml-4">
                                    <h1 class="text-color2 title-font text-lg font-semibold font-sans"><?php echo $blog1['name']; ?></h1>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>

    <?php foreach ($categories2 as $categorie2) { ?>
        <div class="mx-auto max-w-7xl px-2 pt-4">
            <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
                <?php echo $categorie2['name']; ?>
            </h1>
            <div class="flex flex-wrap">
                <?php foreach ($blogs2 as $blog2) { ?>
                    <div class="mt-4 px-1 w-full sm:w-1/2 md:w-1/3 lg:w-2/4">
                        <div class="border border-transparent hover:border-color2 border-2 rounded-md">
                            <a class="grid grid-cols px-1" href="<?php echo $URI->base('blog/' . slugify($blog2['name'])); ?>">
                                <img class='lazy rounded-lg h-48 w-full object-cover' src='./admin/uploads/blogs/<?php echo $blog2['img'] ?>' alt="<?php echo $blog2['name']; ?>">
                                <div class="ml-4">
                                    <h1 class="text-color2 title-font text-lg font-semibold font-sans"><?php echo $blog2['name']; ?></h1>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</section>

<!-- <div>
        <div class="mx-auto max-w-7xl px-2 pt-4">
            <div>
                <?php foreach ($categories3 as $categorie3) { ?>
                    <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
                        <?php echo $categorie3['name']; ?>
                    </h1>
                <?php } ?>
            </div>

            <div class="flex">
                <div class="flex justify-center">
                    <?php foreach ($blogs3 as $blog3) { ?>
                        <div class="mt-4 px-2">
                            <div class="border border-transparent hover:border-color2 border-2 rounded-md">
                                <a class="grid grid-cols px-1" href="<?php echo $URI->base('blog/' . slugify($blog3['name'])); ?>">
                                    <img class='lazy rounded-lg h-48 cover' src='./admin/uploads/blogs/<?php echo $blog3['img'] ?>'>
                                    <div class="ml-4">
                                        <h1 class="text-color2 title-font text-lg font-semibold font-sans"><?php echo $blog3['name']; ?></h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div> -->
</section>
<div>
    <div class="mx-auto max-w-7xl px-2 pt-4">
        <div>
            <?php foreach ($categories3 as $categorie3) { ?>
                <h1 class="text-color1 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
                    <?php echo $categorie3['name']; ?>
                </h1>
            <?php } ?>
        </div>

        <div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php foreach ($blogs3 as $blog3) { ?>
                    <div>
                        <div class="pt-2">
                            <div class="border border-transparent hover:border-color2 border-2 rounded-md">
                                <a class="grid grid-cols px-1 flex justify-center" href="<?php echo $URI->base('blog/' . slugify($blog3['name'])); ?>">
                                    <img class='lazy rounded-lg h-48 cover w-full' src='./admin/uploads/blogs/<?php echo $blog3['img'] ?>'>
                                    <div class="ml-4 mt-2">
                                        <h1 class="text-color2 title-font text-lg font-semibold font-sans"><?php echo $blog3['name']; ?></h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
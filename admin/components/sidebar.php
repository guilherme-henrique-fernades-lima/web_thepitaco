<aside class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%] border border-gray-200">
  <div>
    <div class="px-6">
      <a href="#" title="home">
        <img class="w-full p-3" src="../assets/img/logo.png">
      </a>
    </div>
    <ul class="space-y-2 tracking-wide mt-2">
      <li>
        <a href="dashboard.php" aria-label="dashboard" class="relative px-3 py-2 flex items-center space-x-3 rounded-xl <?php if ($page == 'dash') {
          echo 'bg-blue-800 text-white';
          } ?>">
          <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
            <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
            <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200"></path>
            <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
          </svg>
          <span class="-mr-1 font-medium">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="blogs.php" class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group 
        <?php if ($page == 'blogs') {
          echo 'bg-blue-800 text-white';
          } ?>">
          <i class="bi bi-journal-bookmark-fill"></i>
          <span class="-mr-1 font-medium">Blogs</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
    <a href="../admin/controllers/logout.php">
      <button class="px-3 py-2 flex items-center space-x-3 rounded-md text-gray-800 group">
        <i class="bi bi-box-arrow-left"></i>
        <span class="group-hover:text-gray-700">Logout</span>
      </button>
    </a>
  </div>
</aside>
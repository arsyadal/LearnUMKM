<!DOCTYPE html>
<html lang="en" data-theme="mytheme">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>User</title>
  </head>
  <body>
    <!-- navbar -->
    <div class="navbar bg-base-100">
      <div class="navbar-start">
        <div class="dropdown">
          <label tabindex="0" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
          </label>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a>Home</a></li>
            <li>
              <a>Course</a>
            </li>
            <li><a>News</a></li>
          </ul>
        </div>
        <a href="course.php">
          <img src="umkm logo.png" alt="LearnUMKM" class="btn btn-ghost text-xl text-primary h-10 w-200" />
        </a>
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a href="#" class="mr-10">Home</a></li>
          <li><a href="#" class="mr-10">Course</a></li>
          <li><a href="#course" class="mr-10">News</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        <div class="flex-none gap-2">
          <div class="flex items-center">
            <div class="dropdown dropdown-end">
              <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                  <img alt="Tailwind CSS Navbar component" src="sincahn.jpg" />
                </div>
              </label>
              <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li>
                  <a href="editprofile.php" class="justify-between"> Profile </a>
                </li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- navbar end -->

    <!-- progres -->
    <div class="flex justify-center">
      <div class="card w-1/3 bg-base-100 shadow-xl">
        <div class="card-body flex items-center justify-between">
          <div class="flex-grow"></div>
          <div class="radial-progress text-primary ml-auto" style="--value: 70" role="progressbar">70%</div>
        </div>
        <div class="card-body">
          <h2 class="card-title">GoModern</h2>
          <p>SISFONE CATERING</p>
        </div>
      </div>

      <!-- progress end -->

      <!-- courses -->

      <div class="card bg-base-100 shadow-xl ml-4 w-3/5">
        <div class="card-body">
          <div class="justify-self-start">
            <figure><img src="course.avif" alt="Album" style="width: 250px; height: auto" /></figure>
          </div>

          <h2 class="card-title">Courses is released!</h2>

          <p>Click the button to listen on Spotiwhy app.</p>
          <div class="card-actions justify-end">
            <a href="course.php" class="btn btn-primary">Watch</a>
          </div>
        </div>
      </div>
    </div>
    <!-- timeline -->
    <div class="flex justify-center mt-3">
      <div class="card w-1/3 bg-base-100 shadow-xl">
        <div class="card-body">
          <h2 class="card-title">Timeline</h2>
        </div>
        <div class="avatar">
          <div class="w-12 rounded-full ml-8 mr-2 mb-2">
            <img src="sincahn.jpg" />
          </div>
          <p class="mt-2 ml-2">lorem ipsum</p>
          <button class="btn btn-primary btn-sm justify-end ml-20">Submit</button>
        </div>
        <div class="avatar">
          <div class="w-12 rounded-full ml-8 mr-2 mb-2">
            <img src="sincahn.jpg" />
          </div>
          <p class="mt-2 ml-2">lorem ipsum</p>
          <button class="btn btn-primary btn-sm justify-end ml-20">Submit</button>
        </div>
        <div class="avatar">
          <div class="w-12 rounded-full ml-8 mr-2 mb-2">
            <img src="sincahn.jpg" />
          </div>
          <p class="mt-2 ml-2">lorem ipsum</p>
          <button class="btn btn-primary btn-sm justify-end ml-20">Submit</button>
        </div>
        <div class="avatar">
          <div class="w-12 rounded-full ml-8 mr-2 mb-2">
            <img src="sincahn.jpg" />
          </div>
          <p class="mt-2 ml-2">lorem ipsum</p>
          <button class="btn btn-primary btn-sm justify-end ml-20">Submit</button>
        </div>
        <div class="avatar">
          <div class="w-12 rounded-full ml-8 mr-2 mb-2">
            <img src="sincahn.jpg" />
          </div>
          <p class="mt-2 ml-2">lorem ipsum</p>
          <button class="btn btn-primary btn-sm justify-end ml-20">Submit</button>
        </div>
      </div>
      <!-- timeline end -->
      <div class="card bg-base-100 shadow-xl ml-4 w-3/5">
        <figure><img src="course.avif" alt="Album" style="width: 250px; height: auto" /></figure>
        <div class="card-body">
          <h2 class="card-title">Courses is released!</h2>
          <p>Click the button to listen on Spotiwhy app.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Watch</button>
          </div>
        </div>
      </div>
    </div>
    <!-- courses end -->

    <!-- academic -->
    <h1 class="ml-16 text-xl mb-3 mt-3">Academic</h1>
    <div class="flex justify-center">
      <div class="card w-96 bg-base-100 shadow-xl image-full">
        <figure><img src="online.jpg" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title">Shoes!</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl image-full ml-8 mr-8">
        <figure><img src="online.jpg" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title">Shoes!</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl image-full">
        <figure><img src="online.jpg" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title">Shoes!</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- academic end -->
  </body>
</html>

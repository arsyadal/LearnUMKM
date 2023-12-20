<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>edit</title>
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
        <a href="dashboard.php">
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
                  <a href="#" class="justify-between"> Profile </a>
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
    <!-- breadcrumbs -->
    <div class="text-sm breadcrumbs ml-8">
      <ul>
        <li><a href="user.php">Profile</a></li>
        <li><a class="link link-primary">Edit Profile</a></li>
      </ul>
    </div>
    <!-- breadcrumbs end -->

    <!-- card -->

    <div class="card w-3/4 bg-base-100 shadow-xl mx-auto">
      <div class="card-body grid grid-cols-3 items-center">
        <div class="col-span-1 flex items-center">
          <div class="avatar">
            <div class="w-24 rounded-full">
              <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
            </div>
          </div>
        </div>
        <div class="col-span-2 mr-12">
          <h2 class="card-title">Tantri Palawita</h2>
          <h2 class="card-title mb-2">SISFONE CATERING</h2>
          <h2 class="card-title">Go Online</h2>
        </div>
        <div class="col-span-1 flex">
          <p class="text-2xl font-bold">Edit profil</p>
          <p class="text-2xl">Courses</p>
        </div>

        <hr class="col-span-3" />
      </div>

      <div class="form-control ml-10 mr-10">
        <label class="label">
          <span class="label-text">First Name</span>
        </label>
        <input type="email" placeholder="First Name" class="input input-bordered" required />
      </div>
      <div class="form-control ml-10 mr-10">
        <label class="label">
          <span class="label-text">Last Name</span>
        </label>
        <input type="email" placeholder="Last Name" class="input input-bordered" required />
      </div>
      <div class="form-control ml-10 mr-10">
        <label class="label">
          <span class="label-text">Email</span>
        </label>
        <input type="email" placeholder="Email" class="input input-bordered" required />
      </div>
      <div class="form-control ml-10 mr-10 mb-10">
        <label class="label">
          <span class="label-text">Description</span>
        </label>
        <input type="email" placeholder="Description" class="input input-bordered" required />
      </div>
      <div class="col-span-3 flex justify-end">
        <!-- Open the modal using ID.showModal() method -->
        <button class="btn btn-primary mr-5 mb-10" onclick="my_modal_1.showModal()">Simpan</button>
        <dialog id="my_modal_1" class="modal">
          <div class="modal-box">
            <h3 class="font-bold text-lg">Selamat!</h3>
            <p class="py-4">Data anda berhasil tersimpan! Tekan ESC untuk kembali atau tekan tombol close</p>
            <div class="modal-action">
              <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn">Close</button>
              </form>
            </div>
          </div>
        </dialog>
      </div>
    </div>

    <!-- card end -->
  </body>
</html>

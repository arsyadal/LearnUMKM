<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>

  </head>
  <body>
    <div class="hero min-h-screen" style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">

        <div class="hero-overlay bg-opacity-60">
        <div class="max-w-4xl mx-auto p-4">
        <div class="max-md">
            <div class="card w-full max-w-2xl shadow-2xl bg-base-100 mx-auto">
                <form class="card-body">

            <h1 class="text-center font-bold text-xl mt-2 mb-2">Profil Pengguna</h1>

            <div class="form-control">
              <label class="label">
                <span class="label-text">Nama Lengkap</span>
              </label>
              <input type="Nama Lengkap" placeholder="Nama Lengkap" class="input input-bordered" required />
            </div>
            <div class="form-control">
                <label class="label">
                  <span class="label-text">Username</span>
                </label>
                <input type="Username" placeholder="Username" class="input input-bordered" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Email</span>
                </label>
                <input type="email" placeholder="email" class="input input-bordered" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Nomor Telepon</span>
                </label>
                <input type="no" placeholder="Nomor Telepon" class="input input-bordered" required />
              </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Password</span>
              </label>
              <input type="password" placeholder="password" class="input input-bordered" required />
          
              <h1 class="text-center font-bold text-xl mt-4 mb-4">Informasi Bisnis UMKM</h1>

            </div>

            <div class="form-control">
                
                <div class="form-control">
                    <label class="label">
                      <span class="label-text">Nama UMKM</span>
                    </label>
                    <input type="umkm" placeholder="Nama UMKM" class="input input-bordered" required />
                  </div>
                  <div class="form-control">
                    <label class="label">
                      <span class="label-text">Jenis Usaha</span>
                    </label>
                    <input type="jenis" placeholder="Jenis Usaha" class="input input-bordered" required />
                  </div>
                  <div class="form-control">
                    <label class="label">
                      <span class="label-text">Skala Usaha</span>
                    </label>
                    <input type="skala" placeholder="Skala Usaha" class="input input-bordered" required />
                  </div>
                  <div class="form-control">    
                    <label class="label">
                      <span class="label-text">Nomor Telepon</span>
                    </label>
                    <input type="no" placeholder="Nomor telepon" class="input input-bordered" required />
                  </div>
                  
<!-- You can open the modal using ID.showModal() method -->
<button class="btn btn-primary mt-3" onclick="my_modal_4.showModal()">Register</button>
<dialog id="my_modal_4" class="modal">
  <div class="modal-box w-11/12 max-w-5xl">
    <h3 class="font-bold text-lg">Selamat!</h3>
    <p class="py-4">Registrasi Kamu Berhasil!</p>
    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button, it will close the modal -->
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>          
  </div>
          </form>
        </div>    

          </div>
        </div>
      </div>
    </div>
</div>
</div>
    
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
  </head>
  <body>
    <div class="hero min-h-screen bg-base-200 flex items-center justify-center">
      <div class="flex w-full lg:w-3/4 px-4">
        <div class="card shrink-0 w-1/2 shadow-2xl bg-base-100">
          <img src="Checklist.jpg" alt="login" class="w-full h-auto" />
        </div>
        <div class="card shrink-0 w-1/2 shadow-2xl bg-base-100">
          <form class="card-body">
            <!-- <img src="umkm logo.png" alt="LearnUMKM" class="btn btn-ghost text-xl text-primary h-auto w-auto" /> -->

            <div class="form-control">
              <label class="label">
                <span class="label-text">Email</span>
              </label>
              <input type="email" placeholder="email" class="input input-bordered" required />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Password</span>
              </label>
              <input type="password" placeholder="password" class="input input-bordered" required />
              <label class="label">
                <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
              </label>
              <div class="flex items-center">
                <input type="checkbox" checked="checked" class="checkbox-sm mr-2" />
                <span class="label-text">Remember me</span>
              </div>
            </div>
            <div class="form-control mt-3 flex justify-center">
              <a href="quisoner.php" class="btn btn-primary px-8">Login</a>
            </div>
            <label class="label">
              <span class="label-text">Don't have account?</span>
            </label>
            <div class="form-control flex justify-center">
              <a href="register.php" class="btn btn-outline btn-primary px-8">Sign Up</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

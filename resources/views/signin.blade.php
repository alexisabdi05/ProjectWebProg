<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/signin.css')
</head>
<body>
  <div class="gradient-circle ellipse-1"></div>
  <div class="gradient-circle ellipse-2"></div>
  <div class="gradient-circle ellipse-4"></div>
  <div class="gradient-circle ellipse-3"></div>
  {{-- <div class="gradient-circle ellipse-5"></div> --}}
  <div class="navbar-container">
    @include('layout/navbar')
  </div>
  <div class="login-box">
    <h2 class="sign-in">Sign in</h2>
    <h4 class="quote">"The soul becomes dyed with the color of its thoughts"</h4>
    <div class="flex flex-col w-3/4 place-items-center">
        <div class="mb-7 flex">
            <input class="appearance-none border rounded-2xl shadow-xl w-full py-2.5 px-12 text-3xl font-semibold text-gray-500 focus:outline-none focus:shadow-outline text-center" id="username" type="text" placeholder="Username">
        </div>
        <div class="mb-7 flex">
            <input class="appearance-none border rounded-2xl shadow-xl w-full py-2.5 px-12 text-3xl font-semibold text-gray-500 focus:outline-none focus:shadow-outline text-center" id="password" type="password" placeholder="Password">
        </div>
      <div class="flex gap-1 mb-4">
            <p class="text-gray-400 text-xl font-medium">Don't have an account? </p>
            <a class="text-gray-400 text-xl underline decoration-indigo-500 font-bold"href="/signup">Sign up</a>
      </div>
      <div class="mt-2">
        <button class="bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 text-neutral-500 font-bold text-xl py-2 px-12 rounded-xl focus:outline-none focus:shadow-outline mx-auto shadow-md" type="button" style="background-image: linear-gradient(180deg, #EF909B 0%, rgb(255, 226, 234) 100%);">
            Sign In
          </button>
      </div>
      <div class="my-8">
        <img src="{{ asset('img/signin.png') }}" class="img-signin">
      </div>
    </div>
  </div>
</body>
</html>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/profile.css')
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
  <div class="rectangle">
    <div class="w-70 md:w-3/4 h-64 bg-white shadow-lg rounded-2xl flex flex-col justify-center items-start">
        <h1 class="text-6xl font-extrabold ml-12">Hello Manda!</h1>
        <p class="text-lg ml-12">It's good to see you again.</p>
    </div>
    <div class="w-15 md:w-1/5 h-64 bg-white shadow-lg rounded-xl ml-3 flex flex-col justify-center content-center items-center">
        <h1 class="text-6xl font-extrabold content-center">3</h1>
        <p class="mt-3 text-lg text-center leading-snug content-center">Courses<br>Completed</p>
    </div>
    <div class="w-15 md:w-1/5 h-64 bg-white shadow-lg rounded-xl flex flex-col justify-center content-center items-center">
        <h1 class="text-6xl font-extrabold content-center">5</h1>
        <p class="mt-3 text-lg text-center leading-snug content-center">Courses<br>In Progress</p>
    </div>
  </div>
  <div>
    <img src="{{ asset('img/profile.png') }}" class="img-profile">
    </div>
  </div>
  <div class="continue">
    <div class="w-full h-30 bg-white shadow-lg rounded-2xl flex flex-col justify-center items-start">

    </div>
  </div>
  @include('layout/footer')
</body>
</html>

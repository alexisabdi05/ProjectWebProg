<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/profile.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
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
    <div class="w-full bg-white shadow-lg rounded-2xl flex flex-row justify-center">
        <img src="img/home_photoshop.png" class="logo">
        <h4 class=" ml-5 text-4xl font-extrabold self-center">Adobe Photoshop <br> Essentials</h4>
        <p class=" ml-16 text-lg font-extrabold self-center">- </p>
        <p class="ml-4 text-2xl self-center font-medium"> By Herman Ps Channel</p>
        <p class="ml-24 text-3xl self-center font-medium"> 83%</p>
        <button class="text-white font-bold text-3xl py-4 px-16 self-center rounded-2xl focus:outline-none focus:shadow-outline ml-24" type="button" style="background-image: linear-gradient(180deg, #7479DC 0%, #C6C6C6 100%); box-shadow: 0px 0px 7px #000000;">
            Continue
          </button>
    </div>
  </div>
  <h4 class=" ml-20 mt-20 text-4xl font-extrabold self-center">Courses</h4>
  <div class="courses">
    <div class="w-full bg-white shadow-lg rounded-2xl flex flex-row justify-center items-center">
        <img src="img/home_canva.png" class="logo">
        <h4 class=" ml-24  text-3xl font-extrabold self-center">Be A Pro With Canva</h4>
        <p class=" ml-32 text-2xl font-medium self-center">by</p>
        <p class="ml-2 text-2xl self-center font-medium"> Stefan William</p>
        <button class="text-black font-bold text-2xl py-2 px-16 self-center rounded-xl ml-36" type="button" style="border: 2px solid #0C0B0B; border-radius: 8px;">
            View Course
          </button>
    </div>
  </div>
  <div class="courses">
    <div class="w-full bg-white shadow-lg rounded-2xl flex flex-row justify-center items-center">
        <img src="img/home_photoshop.png" class="logo">
        <h4 class=" ml-24  text-3xl font-extrabold self-center">Be A Pro With Canva</h4>
        <p class=" ml-32 text-2xl font-medium self-center">by</p>
        <p class="ml-2 text-2xl self-center font-medium"> Stefan William</p>
        <button class="text-black font-bold text-2xl py-2 px-16 self-center rounded-xl ml-36" type="button" style="border: 2px solid #0C0B0B; border-radius: 8px;">
            View Course
          </button>
    </div>
  </div>
  <div class="courses">
    <div class="w-full bg-white shadow-lg rounded-2xl flex flex-row justify-center items-center">
        <img src="img/home_illustrator.png" class="logo">
        <h4 class=" ml-24  text-3xl font-extrabold self-center">Be A Pro With Canva</h4>
        <p class=" ml-32 text-2xl font-medium self-center">by</p>
        <p class="ml-2 text-2xl self-center font-medium"> Stefan William</p>
        <button class="text-black font-bold text-2xl py-2 px-16 self-center rounded-xl ml-36" type="button" style="border: 2px solid #0C0B0B; border-radius: 8px;">
            View Course
          </button>
    </div>
  </div>
  <div class="courses">
    <div class="w-full bg-white shadow-lg rounded-2xl flex flex-row justify-center items-center">
        <img src="img/home_graphic.png" class="logo">
        <h4 class=" ml-24  text-3xl font-extrabold self-center">Be A Pro With Canva</h4>
        <p class=" ml-32 text-2xl font-medium self-center">by</p>
        <p class="ml-2 text-2xl self-center font-medium"> Stefan William</p>
        <button class="text-black font-bold text-2xl py-2 px-16 self-center rounded-xl ml-36" type="button" style="border: 2px solid #0C0B0B; border-radius: 8px;">
            View Course
          </button>
    </div>
  </div>
  @include('layout/footer')
</body>
</html>

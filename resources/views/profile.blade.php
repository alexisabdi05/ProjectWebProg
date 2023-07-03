<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/profile.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        integrity="sha384-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        integrity="sha384-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
</head>

<body>
{{--
    <div class="gradient-circle ellipse-1"></div>
    <div class="gradient-circle ellipse-2"></div>
    <div class="gradient-circle ellipse-4"></div>
    <div class="gradient-circle ellipse-3"></div>
    {{-- <div class="gradient-circle ellipse-5"></div>
    <div class="navbar-container">
        @include('layout/navbar')
    </div>
    <div class="rectangle">
        <div class="w-70 md:w-3/4 h-64 bg-white shadow-lg rounded-2xl flex flex-col justify-center items-start">
            <h1 class="text-6xl font-extrabold ml-12">Hello Manda!</h1>
            <p class="text-lg ml-12">It's good to see you again.</p>
        </div>
        <div
            class="w-15 md:w-1/5 h-64 bg-white shadow-lg rounded-xl ml-3 flex flex-col justify-center content-center items-center">
            <h1 class="text-6xl font-extrabold content-center">3</h1>
            <p class="mt-3 text-lg text-center leading-snug content-center">Courses<br>Completed</p>
        </div>
        <div
            class="w-15 md:w-1/5 h-64 bg-white shadow-lg rounded-xl flex flex-col justify-center content-center items-center">
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
            <button
                class="text-white font-bold text-3xl py-4 px-16 self-center rounded-2xl focus:outline-none focus:shadow-outline ml-24"
                type="button"
                style="background-image: linear-gradient(180deg, #7479DC 0%, #C6C6C6 100%); box-shadow: 0px 0px 7px #000000;">
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
            <button class="text-black font-bold text-2xl py-2 px-16 self-center rounded-xl ml-36" type="button"
                style="border: 2px solid #0C0B0B; border-radius: 8px;">
                View Course
            </button>
        </div>
    </div>
    @include('layout/footer')
--}}
  <div class="gradient-circle ellipse-1"></div>
  <div class="gradient-circle ellipse-2"></div>
  <div class="gradient-circle ellipse-4"></div>
  <div class="gradient-circle ellipse-3"></div>
  <div class="gradient-circle ellipse-5"></div>
  <div class="gradient-circle ellipse-6"></div>
  <div class="navbar-container">
    @include('layout/navbar')
  </div>

  <div class="flex grid-flow-row">
    <div class="bg-white shadow-lg rounded-lg p-8 ml-5 z-40 w-1/3" style="background: linear-gradient(125deg, #F5C2C9, #B2B8EF);">
      <div class="flex items-center">
        <div class="w-32 h-32 rounded-full bg-white shadow-lg overflow-hidden">
          <img src="../img/profilee.png" alt="propil" class="object-cover">
        </div>
        <h1 class="ml-9 text-3xl font-medium text-white leading-8">Hello, <br> amandaardianti!</h1>
      </div>

      <div class="mt-6 flex">
        <div class="bg-white rounded-lg p-2 py-4 shadow-md mr-6 w-1/2">
          <div class="flex flex-col items-center">
            <h2 class="text-3xl font-bold content-center text-gray-600">4</h2>
            <p class="text-md text-center font-medium leading-4 content-center text-gray-400">Courses<br>On-Going</p>
          </div>
        </div>

        <div class="bg-white rounded-lg p-2 py-4 shadow-md w-1/2">
          <div class="flex flex-col items-center">
            <h2 class="text-3xl font-bold content-center text-gray-600 ">8</h2>
            <p class="text-md text-center font-medium leading-4 content-center text-gray-400">Courses<br>Completed</p>
          </div>
        </div>
      </div>

      <div class="mt-10">
        <h2 class="text-2xl font-medium text-white mb-3 inline-block">Achievement</h2>
        <a href="/achievement" class="text-indigo-500 ml-41 text-xl underline">See more</a>
      </div>

      <div class="mt-2">
        <div class="mb-4">
          <span class="text-md text-white">Watch 10 Days Canva Course</span>
          <div class="bg-gray-200 rounded-full h-2 mt-1">
            <div class="bg-blue-500 rounded-full h-full" style="width: 50%;"></div>
          </div>
        </div>
        <div class="mb-4">
          <span class="text-md text-white">Watch 10 Days Canva Course</span>
          <div class="bg-gray-200 rounded-full h-2 mt-1">
            <div class="bg-blue-500 rounded-full h-full" style="width: 75%;"></div>
          </div>
        </div>
        <div>
          <span class="text-md text-white">Watch 10 Days Canva Course</span>
          <div class="bg-gray-200 rounded-full h-2 mt-1">
            <div class="bg-blue-500 rounded-full h-full" style="width: 25%;"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-3 ml-6 z-40 flex-initial mb-5">
        <h1 class="text-xl font-semibold text-gray-600">On-going course</h1>
        <div class="grid grid-cols-4 gap-4 mt-10 mr-5">
          <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
              <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
            </div>
            <div class="p-5 text-center">
              <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                Photoshop Effects Tutorial
              </h5>
              <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                <span class="text-indigo-500 font-bold text-3xl">3</span>/5 completed days
              </p>
            </div>
            <div class="p-5 pt-0 flex justify-center">
              <button class="select-none rounded-full bg-indigo-500 py-2 px-6 text-center align-middle text-xs font-semibold uppercase text-white shadow-md shadow-indigo-500/20 transition-all hover:shadow-lg hover:shadow-indigo-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">
                Continue Learn
              </button>
            </div>
          </div>

          <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
              <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
            </div>
            <div class="p-5 text-center">
              <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                Photoshop Effects Tutorial
              </h5>
              <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                <span class="text-indigo-500 font-bold text-3xl">3</span>/5 completed days
              </p>
            </div>
            <div class="p-5 pt-0 flex justify-center">
              <button class="select-none rounded-full bg-indigo-500 py-2 px-6 text-center align-middle text-xs font-semibold uppercase text-white shadow-md shadow-indigo-500/20 transition-all hover:shadow-lg hover:shadow-indigo-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">
                Continue Learn
              </button>
            </div>
          </div>

          <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
              <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
            </div>
            <div class="p-5 text-center">
              <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                Photoshop Effects Tutorial
              </h5>
              <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                <span class="text-indigo-500 font-bold text-3xl">3</span>/5 completed days
              </p>
            </div>
            <div class="p-5 pt-0 flex justify-center">
              <button class="select-none rounded-full bg-indigo-500 py-2 px-6 text-center align-middle text-xs font-semibold uppercase text-white shadow-md shadow-indigo-500/20 transition-all hover:shadow-lg hover:shadow-indigo-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">
                Continue Learn
              </button>
            </div>
          </div>

          <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
              <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
            </div>
            <div class="p-5 text-center">
              <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                Photoshop Effects Tutorial
              </h5>
              <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                <span class="text-indigo-500 font-bold text-3xl">3</span>/5 completed days
              </p>
            </div>
            <div class="p-5 pt-0 flex justify-center">
              <button class="select-none rounded-full bg-indigo-500 py-2 px-6 text-center align-middle text-xs font-semibold uppercase text-white shadow-md shadow-indigo-500/20 transition-all hover:shadow-lg hover:shadow-indigo-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">
                Continue Learn
              </button>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="-mt-36 ml-128 z-40 flex-initial">
    <h1 class="text-xl font-semibold text-gray-700">Completed Course</h1>
    <div class="grid grid-cols-4 gap-4 mt-10 mr-5">
      <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
          <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
        </div>
        <div class="p-5 text-center">
          <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            Photoshop Effects Tutorial
          </h5>
          <p class="block text-base font-light leading-relaxed text-inherit antialiased">
            by Photoshop Tutorial
          </p>
        </div>
      </div>

      <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
          <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
        </div>
        <div class="p-5 text-center">
          <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            Photoshop Effects Tutorial
          </h5>
          <p class="block text-base font-light leading-relaxed text-inherit antialiased">
            by Photoshop Tutorial
          </p>
        </div>
      </div>

      <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
          <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
        </div>
        <div class="p-5 text-center">
          <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            Photoshop Effects Tutorial
          </h5>
          <p class="block text-base font-light leading-relaxed text-inherit antialiased">
            by Photoshop Tutorial
          </p>
        </div>
      </div>

      <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
          <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
        </div>
        <div class="p-5 text-center">
          <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            Photoshop Effects Tutorial
          </h5>
          <p class="block text-base font-light leading-relaxed text-inherit antialiased">
            by Photoshop Tutorial
          </p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-4 gap-4 mt-14 mb-10 mr-5">
        <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
          <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
            <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
          </div>
          <div class="p-5 text-center">
            <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
              Photoshop Effects Tutorial
            </h5>
            <p class="block text-base font-light leading-relaxed text-inherit antialiased">
              by Photoshop Tutorial
            </p>
          </div>
        </div>

        <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
          <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
            <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
          </div>
          <div class="p-5 text-center">
            <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
              Photoshop Effects Tutorial
            </h5>
            <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                by Photoshop Tutorial
            </p>
          </div>
        </div>

        <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
          <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
            <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
          </div>
          <div class="p-5 text-center">
            <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
              Photoshop Effects Tutorial
            </h5>
            <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                by Photoshop Tutorial
            </p>
          </div>
        </div>

        <div class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
          <div class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
            <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
          </div>
          <div class="p-5 text-center">
            <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
              Photoshop Effects Tutorial
            </h5>
            <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                by Photoshop Tutorial
            </p>
          </div>
            </div>
        </div>
    </div>
</body>

</html>

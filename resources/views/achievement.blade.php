<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
  @vite('resources/css/achievement.css')
</head>
<body>
  <div class="gradient-circle ellipse-1"></div>
  <div class="gradient-circle ellipse-2"></div>
  <div class="gradient-circle ellipse-4"></div>
  <div class="gradient-circle ellipse-3"></div>
  <div class="gradient-circle ellipse-5"></div>
  <div class="navbar-container">
    @include('layout/navbar')
  </div>

  <div class="backgroundach">
    <img src="{{ asset('img/achievement.png') }}" class="bg-cover bg-center z-0">
  </div>
  <div class="flex-row text-center mb-10 z-10 -mt-130">
    <h1 class="font-semibold text-3xl text-gray-700">Achievements</h1>
    <p class="mt-2 leading-5 font-medium text-lg text-gray-400">Unlock your creative potential and showcase your <br>accomplishments with our Achievement</p>
  </div>

  <div class="ml-56 flex-row text-left mb-12 z-10">
    <h2 class="font-semibold text-2xl text-gray-700 mb-6">On-going Achievement</h2>

    <span class="text-2xl text-gray-600">Watch 10 Days Canva Course</span>
    <div class="bg-gray-200 rounded-full w-9/12 h-6 mt-4 mb-7">
        <div class="bg-indigo-500 rounded-full h-full mb-3" style="width: 50%;"></div>
        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-600">{{'50%'}}</span>
    </div>

    <span class="text-2xl text-gray-600">Watch 10 Days Canva Course</span>
    <div class="bg-gray-200 rounded-full w-9/12 h-6 mt-3 mb-7">
        <div class="bg-indigo-500 rounded-full h-full mb-3" style="width: 50%;"></div>
        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-600">{{'50%'}}</span>
    </div>

    <span class="text-2xl text-gray-600">Watch 10 Days Canva Course</span>
    <div class="bg-gray-200 rounded-full w-9/12 h-6 mt-4 mb-7">
        <div class="bg-indigo-500 rounded-full h-full mb-3" style="width: 40%;"></div>
        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-600">{{'40%'}}</span>
    </div>

    <span class="text-2xl text-gray-600">Watch 10 Days Canva Course</span>
    <div class="bg-gray-200 rounded-full w-9/12 h-6 mt-4 mb-7">
        <div class="bg-indigo-500 rounded-full h-full mb-3" style="width: 50%;"></div>
        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-600">{{'50%'}}</span>
    </div>
  </div>

  <div class="ml-56 mt-5 flex-row text-left mb-20 z-10">
    <h2 class="font-semibold text-2xl text-gray-700 mb-8">Completed</h2>

    <span class="text-2xl text-gray-600">Watch 10 Days Canva Course</span>
    <div class="bg-gray-200 rounded-full w-9/12 h-6 mt-4 mb-7">
        <div class="bg-indigo-300 rounded-full h-full mb-3" style="width: 100%;"></div>
        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-600">{{'100%'}}</span>
    </div>

    <span class="text-2xl text-gray-600">Watch 10 Days Canva Course</span>
    <div class="bg-gray-200 rounded-full w-9/12 h-6 mt-4 mb-7">
        <div class="bg-indigo-300 rounded-full h-full mb-3" style="width: 100%;"></div>
        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-600">{{'100%'}}</span>
    </div>
  </div>

  @include('layout/footer')
</body>
</html>

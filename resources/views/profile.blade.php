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

  <div class="flex">
    <div class="bg-white shadow-lg rounded-lg p-10 ml-5 z-50 w-1/3" style="background: linear-gradient(125deg, #F5C2C9, #B2B8EF);">
        <div class="flex items-center">
            <div class="w-32 h-32 rounded-full bg-white shadow-lg"></div>
            <h1 class="ml-9 text-3xl font-medium text-white leading-8">Hello, <br> Amanda!</h1>
        </div>

        <div class="mt-6 flex">
            <div class="bg-white rounded-lg p-2 py-4 shadow-md mr-8 w-1/2">
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
            <h2 class="text-2xl font-medium text-white mb-3">Achievement</h2>
            <div class="mt-2">
                <div class="mb-4">
                    <span class="text-md text-white">Watch 10 Days Canva Course</span>
                    <div class="bg-gray-200 rounded-full h-2 mt-1">
                        <div class="bg-blue-500 rounded-full h-full" style="width: 50%;"></div> <!-- Adjust width based on progress percentage -->
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-md text-white">Watch 10 Days Canva Course</span>
                    <div class="bg-gray-200 rounded-full h-2 mt-1">
                        <div class="bg-blue-500 rounded-full h-full" style="width: 75%;"></div> <!-- Adjust width based on progress percentage -->
                    </div>
                </div>
                <div>
                    <span class="text-md text-white">Watch 10 Days Canva Course</span>
                    <div class="bg-gray-200 rounded-full h-2 mt-1">
                        <div class="bg-blue-500 rounded-full h-full" style="width: 25%;"></div> <!-- Adjust width based on progress percentage -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 ml-8 z-50">
        <h1 class="text-xl font-semibold mb-3 text-gray-600 "> On-going course</h1>
    </div>
    <div class="grid grid-cols-4 gap-4">

    </div>
</div>

</body>
</html>

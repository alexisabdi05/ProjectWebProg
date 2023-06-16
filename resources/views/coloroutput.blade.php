<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
  @vite('resources/css/color.css')
</head>
<body>
    <div class="navbar-container">
        @include('layout/navbar')
        </div>
        <div class="top w-full px-16 flex flex-row items-center">
            <div class="left w-2/4">
                <h1 class="font-bold text-black">DRAG & DROP</h1>
                <p class="mt-2 font-bold text-black">Drag and drop your photos, and watch the magic happen<p>
                    <img src="img/drag&grop.png" class="" alt="">
            </div>
            <img src="img/imgcolorexample.png" class="cont" alt="">
        </div>

        <div class="output my-10 mx-20 rounded-3xl flex justify-center items-center flex-col">
            <h1 class="font-bold text-black mb-4">YOUR IMAGE:</h1>
            <img src="img/imgcoloroutput.png" class="" alt="">
            <div class="boxes">
                <div class="box" style="background-color: #E28633"></div>
                <div class="box" style="background-color: #783E16"></div>
                <div class="box" style="background-color: #457A88"></div>
                <div class="box" style="background-color: #114E63"></div>
                <div class="box" style="background-color: #172D38"></div>
            </div>
        </div>
        <h1 class="ml-20 text-4xl font-bold text-black">You Want More?</h1>
        <a href="/colorpaletteoutput" class="input rounded-3xl flex justify-center items-center flex-col hover:bg-slate-200 active:bg-slate-300"><img src="img/pict.png" class="w-28" alt="">
            <p class="">Upload your image here</p></a>

        <div class="qoutes flex justify-center items-center flex-col">
            <p class="">"Color is a universal language that speaks to all people."</p>
            <p class=" mt-2">-John Hench</p>
        </div>
    <div class="gradient-circle ellipse-1"></div>
    <div class="gradient-circle ellipse-2"></div>
    <div class="gradient-circle ellipse-4"></div>
    <div class="gradient-circle ellipse-3"></div>
    <div class="gradient-circle ellipse-5"></div>
    @include('layout/footer')
</body>
</html>

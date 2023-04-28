

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/color.css')
</head>
<body>
    <div class="navbar-container">
        @include('layout/navbar')
        </div>
        <div class="top w-full px-16 flex flex-row items-center">
            <div class="left w-2/4">
                <h1 class="text-2xl font-bold text-black">DRAG & DROP</h1>
                <p class="mt-2 text-lg font-bold text-black">Drag and drop your photos, and watch the magic happen<p>
                    <img src="img/drag&grop.png" class="" alt="">
            </div>
            <img src="img/imgcolorexample.png" class="cont" alt="">
        </div>
        <a href="/colorpaletteoutput" class="input my-10 mx-20 rounded-3xl flex justify-center items-center flex-col hover:bg-slate-200 active:bg-slate-300"><img src="img/pict.png" class="w-28" alt="">
            <p class="text-base">Upload your image here</p></a>

        <div class="qoutes flex justify-center items-center flex-col">
            <p class="text-lg">"Color is a universal language that speaks to all people."</p>
            <p class="text-base mt-2">-John Hench</p>
        </div>
        <div class="gradient-circle ellipse-1"></div>
    <div class="gradient-circle ellipse-2"></div>
    <div class="gradient-circle ellipse-4"></div>
    <div class="gradient-circle ellipse-3"></div>
    <div class="gradient-circle ellipse-5"></div>
    @include('layout/footer')
</body>
</html>

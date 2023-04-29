<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/home.css')
</head>
<body>
    <div class="navbar-container">
        @include('layout/navbar')
    </div>

    <div class="section1">
        <div class="left">
            <h6 class="text-4xl leading-tight font-bold">Learn about design with Colorverse.</h6>
            <h4 class="pb-4 text-6xl leading-tight font-bold">Free online courses with
                reliable source.</h5>
            <div class="search_bar">
                <img src="img/home_search-icon.png" alt="">
                <p>What do you want to learn today?</p>
            </div>
        </div>
        <div class="right">
            <img src="img/home_search-img.png" alt="">
        </div>
    </div>
    <h1>test</h1>
    @include('layout/footer')
</body>
</html>

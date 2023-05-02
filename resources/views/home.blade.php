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
        <div class="left1">
            <h6 class="text-4xl leading-tight font-bold">Learn about design with Colorverse.</h6>
            <h4 class="pb-4 text-6xl leading-tight font-bold">Free online courses with
                reliable source.</h5>
            <div class="search_bar">
                <img src="img/home_search-icon.png" alt="">
                <p>What do you want to learn today?</p>
            </div>
        </div>
        <div class="right1">
            <img src="img/home_search-img.png" alt="">
        </div>
    </div>

    <div class="section2">
        <h1>Courses</h1>
        <div class="course">
            {{-- Photoshop --}}
            <div class="course_full">
                <img src="img/home_photoshop.png" alt="">
                <div class="course_text">
                    <h6>Adobe Photoshop</h6>
                    <p>3 courses →</p>
                </div>
            </div>
            {{-- Illustrator --}}
            <div class="course_full">
                <img src="img/home_illustrator.png" alt="">
                <div class="course_text">
                    <h6>Adobe Illustrator</h6>
                    <p>3 courses →</p>
                </div>
            </div>
            {{-- Canva --}}
            <div class="course_full">
                <img src="img/home_canva.png" alt="">
                <div class="course_text">
                    <h6>Canva</h6>
                    <p>3 courses →</p>
                </div>
            </div>
            {{-- Graphic Design --}}
            <div class="course_full">
                <img src="img/home_graphic.png" alt="">
                <div class="course_text">
                    <h6>Graphic Design</h6>
                    <p>3 courses →</p>
                </div>
            </div>
        </div>

        <div class="course">
            {{-- Logo Design --}}
            <div class="course_full">
                <img src="img/home_logo-design.png" alt="">
                <div class="course_text">
                    <h6>Logo Design</h6>
                    <p>3 courses →</p>
                </div>
            </div>
            {{-- Figure Draw --}}
            <div class="course_full">
                <img src="img/home_figure.png" alt="">
                <div class="course_text">
                    <h6>Figure Draw</h6>
                    <p>3 courses →</p>
                </div>
            </div>
            {{-- Cartoon --}}
            <div class="course_full">
                <img src="img/home_cartoon.png" alt="">
                <div class="course_text">
                    <h6>Cartoon</h6>
                    <p>3 courses →</p>
                </div>
            </div>
            {{-- Color Theory --}}
            <div class="course_full">
                <img src="img/home_color-theory.png" alt="">
                    <div class="course_text">
                        <h6>Color Theory</h6>
                        <p>3 courses →</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @include('layout/footer')
</body>
</html>

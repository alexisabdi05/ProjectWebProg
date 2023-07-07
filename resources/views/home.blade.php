<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
  @vite('resources/css/home.css')
</head>
<body>
    {{-- <div class="background">
        <div class="bg"></div>
        <img src="img/home_bg.png" alt="">
    </div> --}}

    <div class="navbar-container">
        @include('layout/navbar')
    </div>

    {{-- SECTION 1 --}}
    <div class="section1a">
        <h1>Improve your design with</h1>
        <img src="img/cvlogoo.png" alt="" id="sec1_logo">
    </div>
    <div class="sec1b">
        <h3>we will gladly help you to learn design from a very basic stage into advanced stage</h3>
    </div>
    <div class="sec1c">
        @include('include.form')
    </div>


    {{-- SECTION 2 --}}
    <div class="sec2">
        <div class="sec2_left">
            <h1>Look at our online courses</h1>
            <a href="/categories/">Study Now!</a>
        </div>
        <div class="sec2_right">
            <div class="grid grid-cols-4 gap-9">
                <div id="c1">
                    <a href="/categories/1">
                        <div class="c1_a">Adobe Photoshop</div>
                    </a>
                    <a href="/categories/5">
                        <div class="c1_b">Logo Design</div>
                    </a>
                </div>
                <div id="c2">
                    <a href="/categories/2">
                        <div class="c2_a">Adobe Illustrator</div>
                    </a>
                    <a href="/categories/6">
                        <div class="c2_b">Figure Draw</div>
                    </a>
                </div>
                <div id="c3">
                    <a href="/categories/3">
                        <div class="c3_a">Canva</div>
                    </a>
                    <a href="/categories/7">
                        <div class="c3_b">Cartoon</div>
                    </a>
                </div>
                <div id="c4">
                    <a href="/categories/8">
                        <div class="c4_a">Color Theory</div>
                    </a>
                    <a href="/categories/4">
                        <div class="c4_b">Graphic Design</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- CAROUSEL --}}

    <div id="animation-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-md">
            <!-- Item 1 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="img/home_banner1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="img/home_banner2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="img/home_banner3.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="img/home_banner4.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="img/home_banner5.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    {{-- SECTION 3 --}}
    <div class="sec3">
        <h1>Browse our best courses</h1>
        <h3>Unleash your creativity and master design with our best courses, where you'll discover how simple it is with Colorverse.</h3>
    </div>

    <div class="grid grid-cols-3 gap-9 best-course" id="col2">
        <a href="/courses/{{ $courses[0]->id }}">
        <div class="c31">
            <img src="/{{$courses[0]->CourseIMG}}" alt="">
            <div class="c32_desc">
                <h1>{{ $courses[0]->CourseName }}</h1>
                <p>{{ $courses[0]->CourseDesc }}</p>
                    <h5>See More →</h5>
                </div>
            </div>
        </a>
        <a href="/courses/{{ $courses[1]->id }}">
        <div class="c32">
            <img src="/{{$courses[1]->CourseIMG}}" alt="">
            <div class="c32_desc">
                <h1>{{ $courses[1]->CourseName }}</h1>
                <p>{{ $courses[1]->CourseDesc }}</p>
                    <h5>See More →</h5>
                </div>
            </div>
        </a>
        <a href="/courses/{{ $courses[2]->id }}">
        <div class="c33">
            <img src="/{{$courses[2]->CourseIMG}}" alt="">
            <div class="c32_desc">
                <h1>{{ $courses[2]->CourseName }}</h1>
                <p>{{ $courses[2]->CourseDesc }}</p>
                    <h5>See More →</h5>
                </div>
            </div>
        </a>
    </div>

    {{-- SECTION 4 --}}
    <div class="sec4">
        <div class="sec4_left">
            <div class="grid grid-cols-3 gap-9">
                <div class="c41_base">
                    <div class="c41">
                        <div class="c41_front">
                            <img src="img/home_illustrator.png" alt="">
                        </div>
                        <div class="c41_back">
                            <h1>test test</h1>
                        </div>
                    </div>
                </div>
                <div class="c42_base">
                    <div class="c42">
                        <div class="c42_front">
                            <img src="img/home_canva.png" alt="">
                        </div>
                        <div class="c42_back">
                            <h1>test test</h1>
                        </div>
                    </div>
                </div>
                <div class="c43_base">
                    <div class="c43">
                        <div class="c43_front">
                            <img src="img/home_photoshop.png" alt="">
                        </div>
                        <div class="c43_back">
                            <h1>test test</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec4_right">
            <h1>Why are we the best from others?</h1>
        </div>
    </div>

    <div class="sec5_title">
        <h1>From Our Community</h1>
        <h2>10 million++ people have joined Colorverse</h2>
    </div>
    <div class="sec5">
        <div class="grid grid-cols-3 gap-12">
            <div class="c51">
                <div class="c51_pic">
                    <img src="img/home_t1.png" alt="">
                </div>
                <h3>Jennie</h3>
                <h4>Graphic Designer</h4>
                <p>“Colorverse has been an invaluable resource in my journey as a freelance graphic designer. Their exceptional selection of free online courses has not only expanded my skillset but also enhanced my marketability in the industry.”</p>
            </div>
            <div class="c51">
                <div class="c51_pic">
                    <img src="img/home_t2.png" alt="">
                </div>
                <h3>Jisoo</h3>
                <h4>Content Creator</h4>
                <p>“I am incredibly grateful for Colorverse, the ultimate destination for free online design courses.  Thanks to Colorverse, I now have the skills and confidence to bring my design ideas to life.”</p>
            </div>
            <div class="c51">
                <div class="c51_pic">
                    <img src="img/home_t3.png" alt="">
                </div>
                <h3>Lisa</h3>
                <h4>Student</h4>
                <p>“As a student pursuing a career in design, Colorverse has been an absolute blessing. Their website offers a wide range of free online courses that have allowed me to explore different areas of design and discover my true passion.”</p>
            </div>
        </div>
    </div>

    {{-- <div class="space"></div> --}}
    @include('layout/footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>
</html>

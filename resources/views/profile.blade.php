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
    <div class="gradient-circle ellipse-1"></div>
    <div class="gradient-circle ellipse-2"></div>
    <div class="gradient-circle ellipse-4"></div>
    <div class="gradient-circle ellipse-3"></div>
    <div class="gradient-circle ellipse-5"></div>
    <div class="gradient-circle ellipse-6"></div>
    <div class="navbar-container">
        @include('layout/navbar')
    </div>
    @php
        use App\Models\User;
        use App\Models\Enrollment;
        use App\Models\CourseStatus;
        $user = auth()->user();
        // @dd($user->id);
        $enrollment = Enrollment::where('user_id', '=', $user->id)->get();
        // @dd($enrollment);
        $ongoing = 0;
        $done = 0;
        foreach ($enrollment as $e) {
            if ($e->statusFinish == 0) {
                $ongoing = $ongoing + 1;
            } else {
                $done = $done + 1;
            }
        }
    @endphp
    <div class="flex grid-flow-row">
        <div class="flex flex-col ml-5">

            <div class="bg-white shadow-lg rounded-lg p-8  z-40"
                style="background: linear-gradient(125deg, #F5C2C9, #B2B8EF);">
                <div class="flex items-center">
                    <div class="w-32 h-32 rounded-full bg-white shadow-lg overflow-hidden">
                        <img src="../img/profilee.png" alt="propil" class="object-cover">
                    </div>
                    <h1 class="ml-9 text-3xl font-medium text-white leading-8">Hello, <br>
                        {{ auth()->user()->username }}
                    </h1>
                </div>

                <div class="mt-6 flex">
                    <div class="bg-white rounded-lg p-2 py-4 shadow-md mr-6 w-1/2">
                        <div class="flex flex-col items-center">
                            <h2 class="text-3xl font-bold content-center text-gray-600">{{ $ongoing }}</h2>
                            <p class="text-md text-center font-medium leading-4 content-center text-gray-400">
                                Courses<br>On-Going</p>
                        </div>
                    </div>


                    <div class="bg-white rounded-lg p-2 py-4 shadow-md w-1/2">
                        <div class="flex flex-col items-center">
                            <h2 class="text-3xl font-bold content-center text-gray-600 ">{{ $done }}</h2>
                            <p class="text-md text-center font-medium leading-4 content-center text-gray-400">
                                Courses<br>Completed</p>
                        </div>
                    </div>
                </div>


                <div class="mt-10">
                    <h2 class="text-2xl font-medium text-white mb-3 inline-block">Achievement</h2>
                    <a href="/achievement" class="text-indigo-500 ml-41 text-xl underline">See more</a>
                </div>
                <div class="mt-2">
                    @php
                        $flag = 0;
                    @endphp
                    @foreach ($enrollment as $enroll)
                        @if ($enroll->statusFinish == 0)
                            @php
                                $total = $enroll->Course->CourseDetail->count();
                                $temp = $enroll->Course->CourseDetail;
                                // @dd($temp);
                                $completed = 0;
                                foreach ($temp as $t) {
                                    $temp2 = CourseStatus::where('coursedetail_id', '=', $t->id)->get();
                                    // @dd($temp2);
                                    foreach ($temp2 as $key => $t2) {
                                        if ($t2->status == true) {
                                            $completed = $completed + 1;
                                        }
                                    }
                                }
                            @endphp
                            <div class="mb-4">
                                <span class="text-md text-white">W{{ $enroll->Course->CourseName }}</span>
                                <div class="bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-blue-500 rounded-full h-full"
                                        style="width: {{ ($completed / $total) * 100 }}%"></div>
                                </div>
                            </div>
                            @php
                                $flag = $flag + 1;
                            @endphp
                        @endif
                    @endforeach
                    @if ($flag == 0)
                        <h1 class="text-lg  text-gray-700">You have not enrolled any course</h1>
                    @endif

                </div>
            </div>
            <div class="signout mt-2">
                <a href="/logout">SIGN OUT</a>
            </div>
        </div>



        <div class="mt-3 ml-6 z-40 flex-initial mb-5">
            <h1 class="text-xl font-semibold text-gray-600">On-going course</h1>
            <div class="grid grid-cols-4 gap-4 mt-10 mr-5">
                {{-- @dd($enrollment) --}}
                @php
                    $flag = 0;
                @endphp
                @foreach ($enrollment as $enroll)
                    @if ($enroll->statusFinish == 0)
                        <a href="/courses/{{ $enroll->Course->id }}"
                            class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                            @php
                                $total = $enroll->Course->CourseDetail->count();
                                $temp = $enroll->Course->CourseDetail;
                                // @dd($temp);
                                $completed = 0;
                                foreach ($temp as $t) {
                                    $temp2 = CourseStatus::where('coursedetail_id', '=', $t->id)->get();
                                    // @dd($temp2);
                                
                                    foreach ($temp2 as $t2) {
                                        if ($t2->status == true) {
                                            $completed = $completed + 1;
                                        }
                                    }
                                }
                                // dd($completed);
                                // $temp2 = CourseStatus::where('coursedetail_id', '=', $temp->id)->get();
                                // $completed = $temp2->SortByDesc('');
                            @endphp
                            <div
                                class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                                <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
                            </div>
                            <div class="p-5 text-center">
                                <h5
                                    class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                    {{ $enroll->Course->CourseName }}
                                </h5>
                                <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                                    <span
                                        class="text-indigo-500 font-bold text-3xl">{{ $completed }}</span>/{{ $total }}
                                    completed
                                    days
                                </p>
                            </div>
                            <div class="p-5 pt-0 flex justify-center">
                                <button
                                    class="select-none rounded-full bg-indigo-500 py-2 px-6 text-center align-middle text-xs font-semibold uppercase text-white shadow-md shadow-indigo-500/20 transition-all hover:shadow-lg hover:shadow-indigo-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    type="button" data-ripple-light="true">
                                    Continue Learn
                                </button>
                            </div>
                        </a>
                        @php
                            $flag = $flag + 1;
                        @endphp
                    @endif
                @endforeach
                @if ($flag == 0)
                    <h1 class="text-lg  text-gray-700">You have not enrolled any course</h1>
                @endif
            </div>
        </div>
    </div>

    <div class="mt-2 ml-128 z-40 flex-initial">
        <h1 class="text-xl font-semibold text-gray-700">Completed Course</h1>
        <div class="grid grid-cols-4 gap-4 mt-10 mr-5 flex flex-wrap">
            @php
                $flag = 0;
            @endphp
            @foreach ($enrollment as $enroll)
                @if ($enroll->statusFinish == 1)
                    <div
                        class="flex flex-col items-center justify-center rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                        <div
                            class="relative mx-4 -mt-6 h-32 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                            <img src="../Asset/courseBg.png" alt="img-blur-shadow" class="object-cover h-full" />
                        </div>
                        <div class="p-5 text-center">
                            <h5
                                class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                {{ $enroll->Course->CourseName }}
                            </h5>
                            <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                                by {{ $enroll->Course->author }}
                            </p>
                        </div>
                    </div>
                    @php
                        $flag = $flag + 1;
                    @endphp
                @endif
            @endforeach
            @if ($flag == 0)
                <h1 class="text-lg  text-gray-700">no courses have been completed</h1>
            @endif
        </div>
    </div>
</body>

</html>

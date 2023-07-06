<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
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
    @php
        use App\Models\User;
        use App\Models\Enrollment;
        use App\Models\CourseStatus;
        use App\Models\Category;
        $user = auth()->user();
        // @dd($user->id);
        
        $enrollment = Enrollment::where('user_id', '=', $user->id)->get();
    @endphp
    <div class="backgroundach">
        <img src="{{ asset('img/achievement.png') }}" class="bg-cover bg-center z-0">
    </div>
    <div class="flex-row text-center mb-10 z-10 -mt-150">
        <h1 class="font-semibold text-3xl text-gray-700">Achievements</h1>
        <p class="mt-2 leading-5 font-medium text-lg text-gray-400">Unlock your creative potential and showcase your
            <br>accomplishments with our Achievement
        </p>
    </div>

    <div class="ml-56 flex-row text-left mb-12 z-10">
        <h2 class="font-semibold text-2xl text-gray-700 mb-6">On-going Achievement</h2>
        @foreach ($enrollment as $enroll)
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            @php
                $flag = 0;
                if ($enroll->Course->Category->CategoryName == 'Adobe Photoshop') {
                    if ($enroll->statusFinish == true) {
                        // dd($enroll->statusFinish);
                        $flag = $flag + 1;
                    }
                }
                if ($flag >= 2) {
                    $flag = 2;
                }
            @endphp
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: {{ ($flag / 2) * 100 }}%;">
                            </div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">{{ ($flag / 2) * 100 }}%</span>
            </div>

            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
            <span class="text-2xl text-gray-600">Finish 2 adobe photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bar">
                        <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                            <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">40%</span>
            </div>
        @endforeach


    </div>


    <div class="ml-56 mt-5 flex-row text-left mb-20 z-10">
        <h2 class="font-semibold text-2xl text-gray-700 mb-8">Completed</h2>
        @php
            $flag = 0;
        @endphp
        @foreach ($enrollment as $enroll)
            @if ($enroll->statusFinish == 1)
                <span class="text-2xl text-gray-600">{{ $enroll->Course->CourseName }}</span>
                <div class="flex flex-row items-center mt-2">
                    <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                        <div class="bar">
                            <div class="bg-gray-200 rounded-full w-9/12 h-6 ">
                                <div class="bg-indigo-300 rounded-full h-full " style="width: 40%;"></div>
                            </div>
                        </div>
                    </div>
                    <span class="persen ml-4 text-gray-600">40%</span>
                </div>
                @php
                    $flag = $flag + 1;
                @endphp
            @endif
        @endforeach
        @if ($flag == 0)
            <h1 class="text-lg  text-gray-700">No achievements have been achieved. Don't give up!!</h1>
        @endif

    </div>

    @include('layout/footer')
</body>

</html>

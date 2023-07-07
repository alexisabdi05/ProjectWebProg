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
        
        $enrollmentTemp = Enrollment::where('user_id', '=', $user->id)->get();
        $enrollment = $enrollmentTemp->where('statusFinish', '=', true);
        $photoshop = 0;
        $Ilustrator = 0;
        $Canva = 0;
        $Cartoon = 0;
        $figure = 0;
        $logo = 0;
        $graphic = 0;
        $color = 0;
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
            @php
                switch ($enroll->Course->Category->CategoryName) {
                    case 'Adobe Photoshop':
                        $photoshop = $photoshop + 1;
                        if ($photoshop >= 2) {
                            $photoshop = 2;
                        }
                        break;
                
                    case 'Adobe Ilustrator':
                        $Ilustrator = $Ilustrator + 1;
                        if ($Ilustrator >= 2) {
                            $Ilustrator = 2;
                        }
                        break;
                    case 'Canva':
                        $Canva = $Canva + 1;
                        if ($Canva >= 3) {
                            $Canva = 3;
                        }
                        break;
                    case 'Cartoon':
                        $Cartoon = $Cartoon + 1;
                        if ($Cartoon >= 3) {
                            $Cartoon = 3;
                        }
                        break;
                    case 'Figure Draw':
                        $figure = $figure + 1;
                        if ($figure >= 3) {
                            $figure = 3;
                        }
                        break;
                    case 'Logo Design':
                        $logo = $logo + 1;
                        if ($logo >= 3) {
                            $logo = 3;
                        }
                        break;
                    case 'Graphic Design':
                        $graphic = $graphic + 1;
                        if ($graphic >= 5) {
                            $graphic = 5;
                        }
                        break;
                    case 'Color Theory':
                        $color = $color + 1;
                        if ($color >= 5) {
                            $color = 5;
                        }
                        break;
                    default:
                        break;
                }
                
            @endphp
        @endforeach
        @if ($photoshop < 2)
            <span class="text-2xl text-gray-600">Finish 2 Adobe Photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    {{-- <div class="bar"> --}}
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full "
                            style="width: {{ ceil(($photoshop / 2) * 100) }}%;">
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                <span class="persen ml-4 text-gray-600">{{ ceil(($photoshop / 2) * 100) }}%</span>
            </div>
        @endif
        @if ($Ilustrator < 2)
            <span class="text-2xl text-gray-600">Finish 2 Adobe Ilustrator courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full "
                            style="width: {{ ceil(($Ilustrator / 2) * 100) }}%;">
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">{{ ceil(($Ilustrator / 2) * 100) }}%</span>
            </div>
        @endif
        @if ($Canva < 3)
            <span class="text-2xl text-gray-600">Finish 3 Canva courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: {{ ceil(($Canva / 3) * 100) }}%;">
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">{{ ceil(($Canva / 3) * 100) }}%</span>
            </div>
        @endif
        @if ($Cartoon < 3)
            <span class="text-2xl text-gray-600">Finish 3 Cartoon courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full "
                            style="width: {{ ceil(($Cartoon / 2) * 100) }}%;">
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">{{ ceil(($Cartoon / 2) * 100) }}%</span>
            </div>
        @endif
        @if ($figure < 3)
            <span class="text-2xl text-gray-600">Finish 3 Figure Drawing courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full "
                            style="width: {{ ceil(($figure / 3) * 100) }}%;">
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">{{ ceil(($figure / 3) * 100) }}%</span>
            </div>
        @endif
        @if ($logo < 3)
            <span class="text-2xl text-gray-600">Finish 3 Logo Design courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: {{ ceil(($logo / 3) * 100) }}%;">
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">{{ ceil(($logo / 3) * 100) }}%</span>
            </div>
        @endif
        @if ($graphic < 5)
            <span class="text-2xl text-gray-600">Finish 5 Graphic Design courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full "
                            style="width: {{ ceil(($graphic / 5) * 100) }}%;">
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">{{ ceil(($graphic / 5) * 100) }}%</span>
            </div>
        @endif
        @if ($color < 5)
            <span class="text-2xl text-gray-600">Finish 5 Color Theory courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full "
                            style="width: {{ ceil(($color / 5) * 100) }}%;">
                        </div>
                    </div>
                </div>
                <span class="persen ml-4 text-gray-600">{{ ceil(($color / 5) * 100) }}%</span>
            </div>
        @endif

    </div>


    <div class="ml-56 mt-5 flex-row text-left mb-20 z-10">
        <h2 class="font-semibold text-2xl text-gray-700 mb-8">Completed</h2>
        @php
            $check = false;
        @endphp
        @if ($photoshop == 2)
            <span class="text-2xl text-gray-600">Finish 2 Adobe Photoshop courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    {{-- <div class="bar"> --}}
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: 100%;"></div>
                    </div>
                    {{-- </div> --}}
                </div>
                <span class="persen ml-4 text-gray-600">100%</span>
            </div>
            @php
                $check = true;
            @endphp
        @endif
        @if ($Ilustrator == 2)
            <span class="text-2xl text-gray-600">Finish 2 Adobe Ilustrator courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    {{-- <div class="bar"> --}}
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: 100%;"></div>
                    </div>
                    {{-- </div> --}}
                </div>
                <span class="persen ml-4 text-gray-600">100%</span>
            </div>
            @php
                $check = true;
            @endphp
        @endif
        @if ($Canva == 3)
            <span class="text-2xl text-gray-600">Finish 3 Canva courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    {{-- <div class="bar"> --}}
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: 100%;"></div>
                    </div>
                    {{-- </div> --}}
                </div>
                <span class="persen ml-4 text-gray-600">100%</span>
            </div>
            @php
                $check = true;
            @endphp
        @endif
        @if ($Cartoon == 3)
            <span class="text-2xl text-gray-600">Finish 3 Cartoon courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    {{-- <div class="bar"> --}}
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: 100%;"></div>
                    </div>
                    {{-- </div> --}}
                </div>
                <span class="persen ml-4 text-gray-600">100%</span>
            </div>
            @php
                $check = true;
            @endphp
        @endif
        @if ($figure == 3)
            <span class="text-2xl text-gray-600">Finish 3 Figure Drawing courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    {{-- <div class="bar"> --}}
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: 100%;"></div>
                    </div>
                    {{-- </div> --}}
                </div>
                <span class="persen ml-4 text-gray-600">100%</span>
            </div>
            @php
                $check = true;
            @endphp
        @endif
        @if ($logo == 3)
            <span class="text-2xl text-gray-600">Finish 3 Logo Design courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    {{-- <div class="bar"> --}}
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: 100%;"></div>
                    </div>
                    {{-- </div> --}}
                </div>
                <span class="persen ml-4 text-gray-600">100%</span>
            </div>
            @php
                $check = true;
            @endphp
        @endif
        @if ($graphic == 5)
            <span class="text-2xl text-gray-600">Finish 5 Graphic Design courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    {{-- <div class="bar"> --}}
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: 100%;"></div>
                    </div>
                    {{-- </div> --}}
                </div>
                <span class="persen ml-4 text-gray-600">100%</span>
            </div>
            @php
                $check = true;
            @endphp
        @endif
        @if ($color == 5)
            <span class="text-2xl text-gray-600">Finish 5 Color Theory courses</span>
            <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-200 rounded-full w-9/12 h-6  ">
                    {{-- <div class="bar"> --}}
                    <div class="bg-gray-200 rounded-full h-6 ">
                        <div class="bg-indigo-300 rounded-full h-full " style="width: 100%;"></div>
                    </div>
                    {{-- </div> --}}
                </div>
                <span class="persen ml-4 text-gray-600">100%</span>
            </div>
            @php
                $check = true;
            @endphp
        @endif
        @if ($check == false)
            <h1 class="text-lg  text-gray-700">No achievements have been achieved. Don't give up!!</h1>
        @endif

    </div>

    @include('layout/footer')
</body>

</html>

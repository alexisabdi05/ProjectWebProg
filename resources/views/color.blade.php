<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    @vite('resources/css/color.css')
    <style>
        .backgroundColor {
            background-image: url('/img/color palette -blm image.png');
            overflow-x: hidden;
            overflow-y: auto;
            z-index: -1;
            background-repeat: repeat;
            background-attachment: fixed;
            background-size: cover;
            /* height: 90%; */
            /* margin-top: -3vw; */
        }
    </style>
</head>

<body>
    <div class="navbar-container">
        @include('layout/navbar')
    </div>
    <div class="backgroundColor flex flex-col justify-center text-center">
        <div class="top w-full px-16 flex flex-row items-center">
            <div class="left w-2/4">
                <h1 class="font-bold">Generate your Color Palette</h1>
                <p class="mt-2">Drag and drop your photo here and watch the magic happen
                <p>
            </div>
            {{-- <img src="img/imgcolorexample.png" class="cont" alt=""> --}}
        </div>
        <div class="hasil hidden mt-4 flex flex-col justify-center align-center" id="showOutput">
            <h1 class="font-bold mb-2">Your Image</h1>
            <div class="output rounded-3xl flex justify-center items-center flex-col">
                <img src="/img/imgcoloroutput.png" class="" alt="">
                <div class="boxes">
                    <div class="box" style="background-color: #E28633"></div>
                    <div class="box" style="background-color: #783E16"></div>
                    <div class="box" style="background-color: #457A88"></div>
                    <div class="box" style="background-color: #114E63"></div>
                    <div class="box" style="background-color: #172D38"></div>
                </div>
            </div>
            <h1 class="font-bold">You want more?</h1>
        </div>
        <div class="con-input">
            <a href="#"
                class="input rounded-3xl flex justify-center items-center flex-col hover:bg-slate-200 active:bg-slate-300">
                <img src="/img/pict.png" class="w-28" alt="">
                <p class="">Upload your image here</p>
            </a>
        </div>
        <button class="generate" id="generateBut">Generate</button>
        <div class="qoutes flex justify-center items-center flex-col">
            <p class="font-bold">"Color is a universal language that speaks to all people."</p>
            <p class=" mt-2">-John Hench</p>
        </div>
    </div>
    {{-- <div class="absolute"> --}}
    {{-- </div> --}}
    @include('layout/footer')

    <script>
        const generateBut = document.getElementById('generateBut');
        const showOutput = document.getElementById('showOutput');

        generateBut.addEventListener('click', function() {
            showOutput.classList.toggle('hidden');
        });
    </script>
</body>

</html>

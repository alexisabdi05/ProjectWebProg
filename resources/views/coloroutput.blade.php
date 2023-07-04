<!-- resources/views/result.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        .highlight {
            border: 0.2vw dashed #6e7bdb;
        }
    </style>
</head>

<body>
    {{-- @dd($image) --}}
    <div class="navbar-container">
        @include('layout/navbar')
    </div>
    <div class="backgroundColor flex flex-col justify-center text-center">
        <div class="hasil mt-4 flex flex-col justify-center align-center" id="showOutput">
            <h1 class="font-bold mb-2">Your Image</h1>
            <div class="output rounded-3xl flex justify-center items-center flex-col">
                <div id="preview2" class="preview2">
                    <img id="previewImage2" class="imDrag" src="{{ asset('storage/' . $image) }}" alt="Preview">
                </div>
                @if (!empty($colorPalette))
                    {{-- @dd($colorPalette) --}}
                    <ul class="colorRow flex flex-row">
                        @foreach ($colorPalette as $color)
                            <li style="background-color: {{ $color }};" class="box1">{{ $color }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <h1 class="font-bold">You want more?</h1>
            <a href="/colorpalette" class="back bg-[#6e7bdb]" id="generateBut">Generate More</a>
        </div>
    </div>
    @include('layout/footer')
</body>

</html>

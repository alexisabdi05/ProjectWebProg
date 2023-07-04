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
            margin-top: -5px;
            /* height: 90%; */
            /* margin-top: -3vw; */
        }

        .highlight {
            border: 0.2vw dashed #6e7bdb;
        }
    </style>
</head>

<body>
    {{-- <div class="navbar-container">
        @include('layout/navbar')
    </div> --}}
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
                <div id="preview2" class="preview2 hidden">
                    <img id="previewImage2" class="imDrag" src="" alt="Preview">
                </div>
                @if (!empty($colorPalette))
                    @dd($colorPalette)
                    <ul>
                        @foreach ($colorPalette as $color)
                            <li style="background-color: {{ $color }};">{{ $color }}</li>
                        @endforeach
                    </ul>
                @endif
                {{-- <div class="boxes">
                    <div class="box" style="background-color: $output[0]"></div>
                    <div class="box" style="background-color: $output[1]"></div>
                    <div class="box" style="background-color: $output[2]"></div>
                    <div class="box" style="background-color: $output[3]"></div>
                    <div class="box" style="background-color: $output[4]"></div>
                </div> --}}
            </div>
            <h1 class="font-bold">You want more?</h1>
        </div>
        <div class="con-input flex flex-col" enctype="multipart/form-data">
            {{-- @csrf --}}
            <input type="hidden" name="id" id="id" value="{{ $user->id }}">
            <div class="flex items-center justify-center items-center">
                <label for="file"
                    class="input rounded-3xl flex justify-center items-center flex-col hover:bg-slate-200 active:bg-slate-300"
                    id='dropArea'>
                    <div id="preview" class="preview hidden">
                        <img id="previewImage" class="imDrag" src="" alt="Preview">
                    </div>
                    <div class=" flex flex-col items-center justify-center pt-5 pb-6" id="elementUpload">
                        <img src="/img/pict.png" class="w-28" alt="">
                        <p class="">Upload your image here</p>
                    </div>
                    <input id="file" type="file" class="hidden" name="image" />
                    {{-- <img src="" alt=""> --}}
                    <p id="error-message" class="text-red-500 mt-2 hidden"></p>
                </label>
            </div>
            <button class="generate hidden bg-[#6e7bdb]" id="generateBut">Generate</button>
        </div>
        <div class="qoutes flex justify-center items-center flex-col">
            <p class="font-bold">"Color is a universal language that speaks to all people."</p>
            <p class=" mt-2">-John Hench</p>
        </div>
    </div>
    {{-- <div class="absolute"> --}}
    {{-- </div> --}}
    @include('layout/footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const dropArea = document.getElementById('dropArea');
        const preview = document.getElementById('preview');
        const previewImage = document.getElementById('previewImage');
        const preview2 = document.getElementById('preview2');
        const previewImage2 = document.getElementById('previewImage2');
        const elementUpload = document.getElementById("elementUpload");
        const generate = document.getElementById("generateBut");
        const fileInput = document.getElementById('file');
        const errorMessage = document.getElementById('error-message');
        const hasil = document.getElementById('showOutput');
        var id = $('#id').val();

        // generate.addEventListener('click', function() {
        //     // event.preventDefault();
        //     // const file = event.dataTransfer.files;
        //     // const reader = new FileReader();
        //     previewImage2.src = previewImage.src;
        //     reader.readAsDataURL(file);
        // });
        // Highlight drop area when dragging file over it
        dropArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropArea.classList.add('highlight');
        });

        // Remove highlight when dragging file leaves drop area
        dropArea.addEventListener('dragleave', (event) => {
            event.preventDefault();
            dropArea.classList.remove('highlight');
        });

        // Handle dropped file
        dropArea.addEventListener('drop', (event) => {
            event.preventDefault();
            dropArea.classList.add('highlight');

            const file = event.dataTransfer.files;

            handleFileUpload(file[0]);
        });


        dropArea.addEventListener('change', (event) => {
            const selectedFile = event.target.files;
            dropArea.classList.add('highlight');
            handleFileUpload(selectedFile[0]);
        });

        function handleFileUpload(file) {
            if (file) {
                const validImageTypes = ['image/jpeg', 'image/png', 'image/jpg'];
                if (validImageTypes.includes(file.type)) {
                    const reader = new FileReader();
                    reader.onload = function() {
                        previewImage.src = reader.result;
                        preview.classList.remove('hidden');
                        elementUpload.classList.add('hidden');
                        errorMessage.classList.add('hidden');
                        generate.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                } else {
                    previewImage.src = '';
                    preview.classList.add('hidden');
                    errorMessage.innerText = 'Please upload a valid image file (JPEG, PNG, or GIF).';
                    errorMessage.classList.remove('hidden');
                }
            } else {
                previewImage.src = '';
                preview.classList.add('hidden');
                errorMessage.innerText = 'No file selected.';
                errorMessage.classList.remove('hidden');
            }
        };

        $('#generateBut').click(function() {
                console.log($id);
                $.ajax({
                    url = '/{id}/generate-color-palette',
                    method = 'POST',
                    data: {
                        id: id
                    },
                    // dataType: 'view',
                    success: function(response) {
                        if (response.success) {
                            hasil.classList.remove('hidden');
                            preview2.classList.remove('hidden');
                            preview.classList.add('hidden');
                            elementUpload.classList.remove('hidden');
                            const reader = new FileReader();
                            previewImage2.src = previewImage.src;
                            reader.readAsDataURL(file);
                        }
                    }
                })
            }

        )
    </script>
</body>

</html>

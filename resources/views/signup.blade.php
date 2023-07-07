<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    @vite('resources/css/signup.css')
</head>

<body>
    <div class="gradient-circle ellipse-1"></div>
    <div class="gradient-circle ellipse-2"></div>
    <div class="gradient-circle ellipse-4"></div>
    <div class="gradient-circle ellipse-3"></div>
    <div class="gradient-circle ellipse-5"></div>
    <div class="navbar-container">
        {{-- @include('layout/navbar') --}}
    </div>
    <div class="backgroundlgn">
        <img src="{{ asset('img/bglogin.png') }}" class="bg-cover bg-center">
    </div>

    <div class="login-box">
        <form class="form-lgn flex flex-col justify-center" action="/MakeUser" method="POST">
            @csrf
            <h1 class="flex py-3 my-3 text-4.5xl text-indigo-500 font-bold justify-center">Sign Up</h1>
            <input class="inputbox" type="text" id="username" placeholder="Username" name="username" minlength="6"
                required>
            @error('username')
                <div class="eror">{{ $message }}</div>
            @enderror
            <input class="inputbox" type="email" id="email" placeholder="E-mail" name="email" required>
            @error('email')
                <div class="eror">{{ $message }}</div>
            @enderror

            <input class="inputbox" type="password" id="password" placeholder="Password" name="password" minlength="8"
                required>

            <div class="flex mt-2 justify-center text-sm">
                <p class="text-gray-400 font-medium">Already have an account? </p>
                <a class="text-gray-500 mx-1 underline decoration-indigo-500 font-bold hover:text-indigo-500"
                    href="/signin">Sign in</a>
            </div>
            <div class="flex justify-center py-5">
                <button
                    class="flex items-center justify-center h-8 w-44 bg-indigo-500 rounded-full font-bold text-sm text-white hover:bg-indigo-600">Create
                    Account</button>
            </div>
            <a href="/auth/google"
                class="github text-indigo-500 border-2 border-indigo-500 hover:bg-indigo-500 hover:text-white font-medium rounded-full text-sm px-2.5 py-1 text-center inline-flex items-center  flex justify-center self-center -mt-2 mb-3">
                <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab"
                    data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                    <path fill="currentColor"
                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                    </path>
                </svg>
                Sign up with Google
            </a>
        </form>
    </div>

    <script>
        var form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            var passwordInput = document.getElementById('password');
            var usernameInput = document.getElementById('username');

            var password = passwordInput.value;
            var username = usernameInput.value;

            if (password.length < 8) {
                event.preventDefault();
                alert('Password must be at least 8 characters long.');
            }

            if (username.length < 6) {
                event.preventDefault();
                alert('Username must be at least 6 characters long.');
            }
        });
    </script>
</body>

</html>

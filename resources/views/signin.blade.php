<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    @vite('resources/css/signin.css')
</head>

<body>
    <div class="gradient-circle ellipse-1"></div>
    <div class="gradient-circle ellipse-2"></div>
    <div class="gradient-circle ellipse-4"></div>
    <div class="gradient-circle ellipse-3"></div>
    <div class="gradient-circle ellipse-5"></div>
    <div class="navbar-container">
        <div class="backgroundlgn">
            <img src="{{ asset('img/bglogin.png') }}" class="bg-cover bg-center">
        </div>
        <div class="login-box flex justify-center items-center">
            <form class="form-lgn flex flex-col bg-white px-10 justify-center items-center" action="/signin"
                method="POST">
                @csrf
                <h1 class="flex pb-4 pt-2 my-3 text-4.5xl text-indigo-500 font-bold justify-center">Sign In</h1>
                <input class="inputbox" type="text" id="username" placeholder="Username" name="username"
                    minlength="6" required>
                @error('username')
                    <div class="eror">{{ $message }}</div>
                @enderror
                <input class="inputbox" type="password" id="password" placeholder="Password" name="password"
                    minlength="8" required>
                @error('password')
                    <div class="eror">{{ $message }}</div>
                @enderror
                @if (session()->has('signinEror'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('signinEror') }}
                        <button type="button" class="btn-close" data-bs-dismis="alert" aria-label="close"></button>
                    </div>
                @endif
                <a href="/auth/google"
                    class="github text-white bg-indigo-500 hover:bg-indigo-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mb-2 flex justify-center self-center">
                    {{-- <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path fill="currentColor"
                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                        </path>
                    </svg> --}}
                    Sign in with Google
                </a>
                <div class="flex mt-2 justify-center text-sm">
                    <p class="text-gray-400 font-medium">Don't have account? </p>
                    <a class="text-gray-500 mx-1 underline decoration-indigo-500 font-bold hover:text-indigo-500"
                        href="/signup">Sign Up</a>
                </div>
                <div class="flex justify-center pt-6 -mt-3 pb-7">
                    <button
                        class="flex items-center justify-center h-8 w-48 bg-indigo-500 rounded-full font-bold text-sm text-white hover:bg-indigo-600">Sign
                        in</button>
                </div>
            </form>
        </div>

        <script>
            var form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                var emailInput = document.getElementById('email');
                var passwordInput = document.getElementById('password');
                var usernameInput = document.getElementById('username');

                var email = emailInput.value;
                var password = passwordInput.value;
                var username = usernameInput.value;

                if (!validateEmail(email)) {
                    event.preventDefault();
                    alert('Please enter a valid email address.');
                }

                //     if (username.length < 6) {
                //         event.preventDefault();
                //         alert('Username must be at least 6 characters long.');
                //     }
            });

            function validateEmail(email) {
                var re = /\S+@\S+\.\S+/;
                return re.test(email);
            }
        </script>
</body>

</html>

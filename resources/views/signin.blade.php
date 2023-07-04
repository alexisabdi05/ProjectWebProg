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
    <div class="login-box">
        <form class="form-lgn" action="/validateSignIn" method="POST">
            @csrf
            <h1 class="flex pb-4 pt-2 my-3 text-4.5xl text-indigo-500 font-bold justify-center">Sign In</h1>
            <input class="inputbox" type="text" id="username" placeholder="Username" name="username" minlength="6"
                required>
            @error('username')
                <div class="eror">{{ $message }}</div>
            @enderror
            <input class="inputbox" type="password" id="password" placeholder="Password" name="password" minlength="8"
                required>
            @error('password')
                <div class="eror">{{ $message }}</div>
            @enderror
            <div class="flex mt-5 justify-center text-sm">
                <p class="text-gray-400 font-medium">Don't have account? </p>
                <a class="text-gray-500 mx-1 underline decoration-indigo-500 font-bold hover:text-indigo-500"
                    href="/signup">Sign Up</a>
            </div>
            <div class="flex justify-center pt-6 -mt-1 pb-7">
                <button
                    class="flex items-center justify-center h-8 w-48 bg-indigo-500 rounded-full font-bold text-sm text-white hover:bg-indigo-600">Login</button>
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

            if (password.length < 8) {
                event.preventDefault();
                alert('Password must be at least 8 characters long.');
            }

            if (username.length < 6) {
                event.preventDefault();
                alert('Username must be at least 6 characters long.');
            }
        });

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    </script>
</body>

</html>

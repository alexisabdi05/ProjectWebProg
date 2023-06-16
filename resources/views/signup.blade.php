<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
  @vite('resources/css/signup.css')
</head>
<body>
  <div class="gradient-circle ellipse-1"></div>
  <div class="gradient-circle ellipse-2"></div>
  <div class="gradient-circle ellipse-4"></div>
  <div class="gradient-circle ellipse-3"></div>
  <div class="navbar-container">
    @include('layout/navbar')
  </div>
  <div class="backgroundlgn">
    <img src="{{ asset('img/bglogin.png') }}" class="bg-cover bg-center">
  </div>

  <div class="login-box">
    <form class="form-lgn" action="">
      <h1 class="flex py-3 my-3 text-5xl text-indigo-500 font-bold justify-center">Sign Up</h1>
      <input class="inputbox" type="text" id="username" placeholder="Username" name="username" minlength="6" required>
      <input class="inputbox" type="email" id="email" placeholder="Email" name="email" required>
      <input class="inputbox" type="password" id="password" placeholder="Password" name="password" minlength="8" required>
      <div class="flex mt-5 justify-center text-s">
        <p class="text-gray-400 font-medium">Already have an account? </p>
        <a class="text-gray-500 mx-1 underline decoration-indigo-500 font-bold hover:text-indigo-500" href="/signin">Sign in</a>
      </div>
      <div class="flex justify-center py-7">
        <button class="flex items-center justify-center h-9 w-48 bg-indigo-500 rounded-full font-bold text-sm text-white hover:bg-indigo-600">Create Account</button>
      </div>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/error.css">
    <title>404 Error</title>
</head>
<body>
    <div class="hero">
        <img src="/img/404-logo.png" alt="">
        <h1>404 Not Found</h1>
        <h3>The page you are looking for doesn’t exists, please back to<br>previous page.</h3>
        <a href="javascript:void(0)" onclick="goBack()">Back to previous page</a>
    </div>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</html>
<!-- resources/views/result.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Color Palette Result</title>
</head>

<body>
    <h1>Color Palette Result</h1>
    @if (!empty($colorPalette))
        <ul>
            @foreach ($colorPalette as $color)
                <li style="background-color: {{ $color }};">{{ $color }}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>

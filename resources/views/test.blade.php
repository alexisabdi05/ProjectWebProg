@foreach ($kumpul_test as $test)
    <h1> {{$test["CategoryName"]}} </h1>
    <img src="{{$test["CategoryIMG"]}}"alt="...">
@endforeach

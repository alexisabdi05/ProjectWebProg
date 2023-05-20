@foreach ($kumpul_test as $test)
    {{-- <h1> {{$test["CourseName"]}} </h1>
    <p> {{$test["CourseDesc"]}} </p> --}}
    <h1> {{$test->CategoryName}} </h1>
    <p> {{$test->Course}} </p>
    {{-- @dd($test->Category) --}}
    {{-- <p> {{$test->Category->CategoryName}} </p> --}}


@endforeach

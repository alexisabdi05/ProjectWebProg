@foreach ($kumpul_test as $test)
    <h1> {{$test["CourseName"]}} </h1>
    <p> {{$test["CourseDesc"]}} </p>
    {{-- <p> {{$test->CourseDetail}} </p> --}}
    @foreach ($test->CourseDetail as $item)
    <p> {{$item->CourseDetailTitle}} </p>
    @endforeach
    {{-- @dd($test->CourseDetail) --}}
    {{-- <p> {{$test->Category}} </p> --}}


@endforeach

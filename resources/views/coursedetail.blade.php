@extends('master')
@section('Title', 'Photoshop')
@section('Style', '/css/course-detail.css')
@section('content')

    <div class="hero">
        <div class="course-info">
            <div class="course-outline flex flex-row">
                <img src="/img/course-cover.png" alt="" class="course-img">
                <div class="txt">
                    <h1 class="CourseName">{{ $course->CourseName }}</h1>
                    <h5 class="Category">{{ $category[0]->CategoryName }} Tutorial</h5>
                    <h4 class="CourseDesc text-justify">{{ $course->CourseDesc }}</h4>
                    <div class= "Enroll text-center">
                        <button type="submit">
                            Enroll course
                        </button>
                    </div>
                    </div>
            </div>
            <div class="course-detail">
                @foreach ($courseDetail as $cd)
                    <form class="update-checkbox" data-record-id="{{ $cd->id }}">
                        @csrf
                        <input type="checkbox" {{ $cd->CourseStatus ? 'checked' : '' }} value="try">
                        Day {{ $cd->day }}
                        <br>
                        {{ $cd->CourseDetailTitle }}
                        <br>
                    </form>
                @endforeach
            </div>
        </div>
        <div class="vid">
            <video src="{{ $cd->CourseDetailVideo }}" controls></video>
            <h1 class="CourseName">{{ $cd->CourseDetailTitle }}</h1>
            <h4 class="CourseDesc text-justify">{{ $cd->CourseDetailDesc }}</h4>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function() {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('.update-checkbox input[type="checkbox"]').on('change', function() {
        var form = $(this).closest('form');
        var recordId = form.data('record-id');
        var isChecked = $(this).is(':checked');
        var flag = 0;
        if (isChecked) {
            flag = 1;
        }

        $.ajax({
            url: '/update-checkbox',
            type: 'POST',
            data: {
                recordId: recordId,
                isChecked: isChecked,
                flag: flag
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                console.log(response.success);
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
});

    </script>

@extends('master')
@section('Title', 'Photoshop')
@section('Style', '/css/course-detail.css')
@section('content')

    <div class="hero flex flex-col">
        <div class="course-info">
            <div class="course-outline flex">
                <img src="/img/course-cover.png" alt="">
                <div class="txt">
                    {{ $course->CourseName }}
                    {{ $category[0]->CategoryName }} Tutorial
                    {{ $course->CourseDesc }}
                </div>
            </div>
            <div class="course-detail">
                @foreach ($courseDetail as $cd)
                    <form class="update-checkbox" data-record-id="{{ $cd->id }}">
                        <input type="checkbox" {{ $cd->CourseStatus ? 'checked' : '' }}>
                        Day {{ $cd->day }}

                        <br>
                        {{ $cd->CourseDetailTitle }}
                        <br>
                    </form>
                @endforeach
            </div>
        </div>
        {{ $cd->CourseDetailTitle }}
        {{ $cd->CourseDetailDesc }}
        {{ $cd->CourseDetailVideo }}
        <div class="vid">

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.update-checkbox input[type="checkbox"]').on('change', function() {
            var form = $(this).closest('form');
            var recordId = form.data('record-id');
            var isChecked = $(this).is(':checked');

            $.ajax({
                url: '/update-checkbox',
                type: 'POST',
                data: {
                    recordId: recordId,
                    isChecked: isChecked
                },
            });
        });
        });
    </script>

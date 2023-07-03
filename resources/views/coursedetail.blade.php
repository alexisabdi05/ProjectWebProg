@extends('master')
@section('Title', 'Photoshop')
@section('Style', '/css/course-detail.css')
@section('content')

    <div class="hero flex flex-col">
        <div class="course-info">
            <div class="course-outline flex">
                <img src="/img/course-cover.png" alt="">
                <div class="txt">
                    {{$course->CourseName}}
                    {{-- {{$category->CategoryName}} Tutorial --}}
                    {{$course->CourseDesc}}
                </div>
            </div>
            <div class="course-detail">
                @foreach ($courseDetail as $cd)
                Day {{$cd->day}}
                <br>
                {{$cd->CourseDetailTitle}}
                <br>
                @endforeach
            </div>
        </div>
        {{$cd->CourseDetailTitle}}
        {{$cd->CourseDetailDesc}}
        {{$cd->CourseDetailVideo}}
        <div class="vid">

        </div>
    </div>

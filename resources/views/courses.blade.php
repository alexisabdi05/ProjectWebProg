@extends('master')
@section('Title','Courses')
@section('Style','/css/courses.css')
@section('content')

<div class="hero">
    @include('include.form')
    <div class="flex justify-center">
        <img src="/{{ $category->CategoryIMG}}" alt="" class="main">
    </div>
    <h1 class="title">{{ $category->CategoryName }}</h1>
</div>

<div class="courses">
@foreach ($courses as $course )
<a href="{{ $user->id }}/courses/{{ $course ->id}}">
    <div class="course-list">
        <div  class="flex justify-center">
            <img src="/img/course-cover.png" alt="">
        </div>
        {{-- <img src="{{ $course->courseIMG }}" alt=""> --}}
        <div class="course-txt">
            <div class="flex items-center cont">
        <h2 class="course-title">{{ $course->CourseName }}</h2>
    </div>
        <h4 class="course-desc">{{ $course->CourseDesc }}</h4>
        <p class="more text-center">See more →</p>
        </div>
    </div>
</a>
@endforeach
</div>

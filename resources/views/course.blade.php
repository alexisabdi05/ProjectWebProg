@extends('master')
@section('Title', 'Categories')
@section('Style', '/css/cour.css')
@section('content')

<div class="hero">
    @include('include.form')
    
    <div class="courses">
        @foreach ($courses as $cour)
        <a href="/{{ $user->id }}/courses/{{ $cour->id }}">
            <div class="course-list">
                <div  class="flex justify-center">
                    <img src="/img/course-cover.png" alt="">
                </div>
                {{-- <img src=" {{ $cour->CourseIMG }}" alt=""> --}}
                <div class="course-txt">
                    <div class="flex items-center cont">
                        <h1 class="course-title">{{ $cour->CourseName }}</h1>
                    </div>
                    <h4 class="course-desc">{{ $cour->CourseDesc }}</h4>
                    <p class="more text-center">See more →</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
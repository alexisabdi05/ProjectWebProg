@extends('master')
@section('Title', 'Categories')
@section('Style', '/css/categories.css')
@section('content')

    <div class="category">
        <h2 class="title start">Browse course by categories</h2>
        <p class="sub-title">No matter your skill level, you’ll find so much to learn design in a<br>wide range of our
            categories.</p>
            <div class="categories">
                @foreach ($categories as $category)
                <a href="/{{ $user->id }}/categories/{{ $category ->id}}">
                    <div class="category-list flex flex-col" style="
                        background-color:{{ $category->Color }}">
                        <div class="flex justify-center">
                            <img class="w-fit" src="/{{ $category ->CategoryIMG}}" alt="">
                        </div>
                        <div class="flex h-full w-full justify-center">
                            <h1 class="cat-title self-center">{{ $category->CategoryName }}</h1>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
    </div>

    <h2 class="title">Let’s find the best course for you!</h2>
    <p class="sub-title">We believe everyone has the capacity to learn design. <b>Colorverse</b><br>is a place where you’re
        able to develop your own potential</p>

    @include('include.form')

    <h2 class="title">Look at our courses</h2>
    <p class="sub-title">Access our online courses here and unlock a world of possibilities</p>

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
    {{--@for ($i = 0; $i < 16; $i++)
    <a href="/{{ $user->id }}/courses/{{ $courses[$i]->id }}">
        <div class="course-list">
            <div  class="flex justify-center">
                <img src="/img/course-cover.png" alt="">
            </div>
            {{-- <img src=" {{ $courses[$i]->CourseIMG }}" alt="">
                <div class="flex items-center cont">
                    <h1 class="course-title">{{ $courses[$i]->CourseName }}</h1>
                </div>
                <h4 class="course-desc">{{ $courses[$i]->CourseDesc }}</h4>
                <p class="more text-center">See more →</p>
            </div>
        </div>
    </a>
    @endfor--}}
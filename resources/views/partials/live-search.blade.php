<link rel="stylesheet" href="/css/live-search.css">
@if (isset($searchResults))
<div class="courses">
{{-- <a href="/{{ $user->id }}/courses/{{ $course ->id}}"> --}}
    @foreach ($searchResults as $result)
        <div class="search-result course-list">
            <div class="flex justify-center">
                <img src="/img/course-cover.png" alt="">
            </div>
            <div class="course-txt">
                <div class="flex items-center cont">
                    <h2 class="course-title">{{ $result->CourseName }}</h2>
                </div>
                <h4 class="course-desc">{{ $result->CourseDesc }}</h4>
                <p class="more text-center">See more →</p>
            </div>
        </div>
    @endforeach
{{-- </a> --}}
</div>
@endif

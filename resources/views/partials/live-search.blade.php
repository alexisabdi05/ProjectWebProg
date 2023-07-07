<link rel="stylesheet" href="/css/live-search.css">
@if (isset($searchResults))
<div class="courses">
    @foreach ($searchResults as $result)
    <a href="/courses/{{ $result->id }}">
    <div class="search-result course-list">
            <div class="flex justify-center">
                <img src="/{{ $result->CourseIMG }}" alt="">
            </div>
            <div class="course-txt">
                <div class="flex items-center cont">
                    <h2 class="course-title">{{ $result->CourseName }}</h2>
                </div>
                <h4 class="course-desc">{{ $result->CourseDesc }}</h4>
                <p class="more text-center">See more →</p>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endif

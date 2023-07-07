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
                    <h5 class="Category">Author: {{ $course->author }} </h5>
                    <h4 class="CourseDesc text-justify">{{ $course->CourseDesc }}</h4>
                    <div class="Enroll text-center">
                        @if ($enrolled)
                            <div class="cancel-button" data-enrollment-id="{{ $enrolled->id }}"
                                data-course-id="{{ $course->id }}">Cancel</div>
                        @else
                            <div class="enroll-button" data-course-id="{{ $course->id }}">Enroll</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="course-detail">
                @for ($i = 0; $i < $len; $i++)
                    <form class="update-checkbox" data-record-id="{{ $courseDetail[$i]->id }}">
                        @csrf
                        <input class="cek-box" type="checkbox" {{ $courseStatuses[$i]->status ?? '' ? 'checked' : '' }} value="try"
                            @if (!$enrolled) disabled @endif>

                            <button @if (!$enrolled) disabled @endif class="day-button"
                            data-index="{{ $i }}" data-video-src="{{ $courseDetail[$i]->CourseDetailVideo }}">Day
                            {{ $courseDetail[$i]->day }}</button>

                        <h2 class="courseDTitle">{{ $courseDetail[$i]->CourseDetailTitle }}<h2>
                    </form>
                @endfor
            </div>
        </div>
        <div class="vid">
            <iframe id="video-iframe" @if (!$enrolled) disabled @endif width="920" height="500"
                src="{{ $courseDetail[0]->CourseDetailVideo }}" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <h1 id="video-title" class="CourseName VideoName">{{ $courseDetail[0]->CourseDetailTitle }}</h1>
            <h4 id="video-desc" class="CourseDesc VideoDesc text-justify">{{ $courseDetail[0]->CourseDetailDesc }}</h4>

        </div>
    </div>

    <div class="popup-overlay" id="popupOverlay">
        <div class="popup">
          <h3 class="popup-title">Congratulations you've finish this Course!</h3>
          <p class="popup-message">The ultimate inspiration is the deadline.</p>
          <button class="popup-close-btn" id="popupCloseBtn">Close</button>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var userId = @json($user->id);
            var courseId = @json($course->id);
            var enrolled = @json($enrolled);
            var lastCheckedIndex = -1;
            var checkboxes = $('.update-checkbox input[type="checkbox"]');
            var courseDetail = @json($courseDetail);

            checkboxes.prop('disabled', true);

            checkboxes.each(function(index) {
                var currentCheckbox = $(this);
                var isChecked = currentCheckbox.is(':checked');

                if (isChecked) {
                    lastCheckedIndex = index;
                }
                currentCheckbox.prop('disabled', true);

                if (index === 0) {
                    currentCheckbox.prop('disabled',
                        false); // Enable the first checkbox regardless of its checked state
                }
            });

            if (lastCheckedIndex !== -1) {
                checkboxes.prop('disabled', true);
                checkboxes.eq(lastCheckedIndex + 1).prop('disabled', false);
            }

            if (!enrolled) {
                checkboxes.prop('disabled', true); // Disable all checkboxes except the first one if not enrolled
            }

            $('.day-button').on('click', function() {
                event.preventDefault();
                var index = $(this).data('index') + 1;
                var videoSrc = $(this).data('video-src');
                // Update video source based on the clicked day-button
                $('#video-iframe').attr('src', videoSrc);

                // Fetch the video title and description for the clicked day-button
                $.ajax({
                    url: '/get-video-details', // Replace with the URL that fetches video details
                    method: 'GET',
                    data: {
                        index: index,
                        courseId: courseId
                    },
                    success: function(response) {
                        $('#video-title').text(response.title);
                        $('#video-desc').text(response.description);
                    },
                    error: function(error) {
                        console.log(index);
                        console.log(courseId);
                    }
                });
            });

            $(document).on('click', '.enroll-button', function() {
                var courseId = $(this).data('course-id');
                enrollCourse(courseId, userId);
                alert('Course Enrolled!');
            });

            $(document).on('click', '.cancel-button', function() {
                var enrollmentId = $(this).data('enrollment-id');
                var courseId = $(this).data('course-id');
                cancelEnrollment(enrollmentId, userId, courseId);
                alert('Course Enrollment Cancelled!');
            });

            checkboxes.on('change', function() {
                var currentCheckbox = $(this);
                var form = $(this).closest('form');
                var recordId = form.data('record-id');
                var isChecked = $(this).is(':checked');
                var flag = 0;
                var currentIndex = checkboxes.index(currentCheckbox);

                checkboxes.prop('disabled', true); // Disable all checkboxes

                if (isChecked) {
                    currentCheckbox.prop('checked', true); // Check the current checkbox
                    currentCheckbox.prop('disabled', true); // Disable the current checkbox
                    checkboxes.eq(currentIndex + 1).prop('disabled', false); // Enable the next checkbox
                }

                var nextCheckbox = checkboxes.eq(currentIndex + 1);
                nextCheckbox.prop('disabled', false); // Enable the next checkbox

                if (isChecked) {
                    flag = 1;
                }

                var allChecked = checkboxes.filter(':not(:checked)').length === 0;

                if (allChecked) {
                    // Make AJAX request to update the courseStatus in the database
                    updateCourseStatus(recordId);
                }

                $.ajax({
                    url: '/update-checkbox',
                    type: 'POST',
                    data: {
                        recordId: recordId,
                        isChecked: isChecked,
                        userId: userId,
                        flag: flag
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        console.log(response.success);
                    }
                });

                var nextCourseIndex = currentIndex + 1;
    var nextCourse = courseDetail[nextCourseIndex];
    var nextVideoSrc = nextCourse.CourseDetailVideo;
    var nextCourseName = nextCourse.CourseDetailTitle;
    var nextCourseDesc = nextCourse.CourseDetailDesc;

    $('#video-iframe').attr('src', nextVideoSrc);
    $('#video-title').text(nextCourseName);
    $('#video-desc').text(nextCourseDesc);

            });

            function showPopup() {
            var popupOverlay = document.getElementById('popupOverlay');
            popupOverlay.style.display = 'flex';
            }

            var popupCloseBtn = document.getElementById('popupCloseBtn');
            popupCloseBtn.addEventListener('click', function () {
            var popupOverlay = document.getElementById('popupOverlay');
            popupOverlay.style.display = 'none';
            });

            function updateCourseStatus(recordId) {
                $.ajax({
                    url: '/update-course-status',
                    type: 'POST',
                    data: {
                        courseId: courseId,
                        userId: userId
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        console.log('Course status updated successfully');
                        var allChecked = checkboxes.filter(':not(:checked)').length === 0;
                        if (allChecked) {
                            showPopup(); // Show the pop-up
                        }
                    }
                });
            }

            $(document).on('click', '.enroll-button', function() {
                var courseId = $(this).data('course-id');
                enrollCourse(courseId, userId);
            });

            $(document).on('click', '.cancel-button', function() {
                var enrollmentId = $(this).data('enrollment-id');
                var courseId = $(this).data('course-id');
                cancelEnrollment(enrollmentId, userId, courseId);
            });

            function enrollCourse(courseId, userId) {

                $.ajax({
                    url: '/enroll-course',
                    type: 'POST',
                    data: {
                        courseId: courseId,
                        userId: userId
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        if (response.success) {
                            updateEnrollmentButton(courseId, true);
                            location.reload();
                        }
                    }
                });
            }

            function cancelEnrollment(enrollmentId, userId, courseId) {

                $.ajax({
                    url: '/cancel-enrollment',
                    type: 'DELETE',
                    data: {
                        enrollmentId: enrollmentId,
                        courseId: courseId,
                        userId: userId
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        if (response.success) {
                            updateEnrollmentButton(enrollmentId, false);
                            location.reload();
                        }
                    }
                });
            }

            function updateEnrollmentButton(enrollmentId, enrolled) {
                var button = $('[data-enrollment-id="' + enrollmentId + '"]');
                if (enrolled) {
                    button.text('Cancel');
                    button.removeClass('enroll-button').addClass('cancel-button');
                } else {
                    button.text('Enroll');
                    button.removeClass('cancel-button').addClass('enroll-button');
                }
            }
        });
    </script>

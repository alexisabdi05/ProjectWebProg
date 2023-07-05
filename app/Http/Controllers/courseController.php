<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\CourseStatus;
use App\Models\CourseDetail;
use App\Models\Category;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;

class courseController extends Controller
{

    public function index($id){
        $courses = Course::where('category_id',$id)->get();
        $category = Category::find($id);
        return view('courses', compact('courses','category'));
    }

    public function enrollCourse(Request $request)
{
    $courseId = $request->input('courseId');
    $userId = $request->input('userId');


    $courseDetails = CourseDetail::where('course_id', $courseId)->get();
    

    // Insert the course details for the user
    foreach ($courseDetails as $courseDetail) {
        $courseStats = new CourseStatus();
        $courseStats->user_id = $userId;
        $courseStats->coursedetail_id = $courseDetail->id;
        $courseStats->save();
    }
    
    // Assuming you have a `enrollments` table with `course_id` and `user_id` columns
    $enrollment = new Enrollment();
    $enrollment->course_id = $courseId;
    $enrollment->user_id = $userId;
    $enrollment->save();

    // Return a response indicating the success or failure
    return response()->json(['success' => true]);
}

public function cancelEnrollment(Request $request)
{
    $enrollmentId = $request->input('enrollmentId');
    $userId = $request->input('userId');
    $courseId = $request->input('courseId');
    // Retrieve the enrollment from the database
    $enrollment = Enrollment::find($enrollmentId);

    if (!$enrollment) {
        // Enrollment does not exist, return success response
        return response()->json(['success' => true]);
    }

    $courseDetails = CourseDetail::where('course_id', $courseId)->get();

    foreach ($courseDetails as $courseDetail) {
        CourseStatus::where('coursedetail_id', $courseDetail->id)
        ->where('user_id', $userId)
        ->delete();
    }

    // Delete the enrollment
    $enrollment->delete();

    // Return a response indicating the success
    return response()->json(['success' => true]);
}
    public function updateCourseStatus(Request $request)
        {
            $courseId = $request->input('courseId');
            $userId = $request->input('userId');

            $enrollment = Enrollment::where('course_id',$courseId)->where('user_id',$userId)->first();
            if ($enrollment) {
                $enrollment->statusFinish = true; 
                $enrollment->save();
                return response()->json(['success' => true]);
            }

            return response()->json(['success' => false, 'message' => 'Course detail not found']);
        }
}

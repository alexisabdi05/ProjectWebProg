<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\CourseStatus;
use App\Models\CourseDetail;
use App\Models\Category;
use App\Models\User;

class courseDetailController extends Controller
{
    public function index($id){
        $user = auth()->user();
        $course = Course::find($id);
        $courseDetail = $course->CourseDetail;
        $len = $courseDetail->count();
        $category = Category::where('id', $course->category_id)->get();
        $enrolled = Enrollment::where('user_id', $user->id)->where('course_id', $id)->first();
        $courseStatuses = [];

        foreach ($courseDetail as $detail) {
            $courseStatus = $detail->courseStatus()->where('user_id', $user->id)->first();
            if ($courseStatus) {
                $courseStatuses[] = $courseStatus;
            }
        }


        return view('coursedetail', compact('course','courseDetail','category', 'courseStatuses','len', 'user', 'enrolled'));
    }

    public function updateCheckbox(Request $request)
    {
        try {
            $user = $request->input('userId');
            $recordId = $request->input('recordId');
            $isChecked = $request->input('isChecked');
            $flag = $request->input('flag');

            // Retrieve the corresponding record from the database
            $updateStat = CourseStatus::where('coursedetail_id', $recordId)
                ->where('user_id', $user)
                ->first();

            if (!$updateStat) {
                // Record not found
                return response()->json(['error' => 'Record not found'], 404);
            }

            // Update the CourseStatus field based on the checkbox state
            $updateStat->status = $flag == 1 ? 1 : 0;

            // Save the changes to the database
            $updateStat->save();

            // Return a response indicating the success
            return response()->json(['success' => $isChecked]);
        } catch (\Exception $e) {
            // Handle the exception
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getVideoDetails(Request $request)
    {
        $index = $request->input('index');
        $courseId = $request->input('courseId');

        // Fetch the course detail based on the index
        $courseDetail = CourseDetail::where('day',$index)->where('course_id', $courseId)->first();

        if (!$courseDetail) {
            // Course detail not found
            return response()->json(['error' => 'Course detail not found'], 404);
        }

        // Return the video details
        return response()->json([
            'title' => $courseDetail->CourseDetailTitle,
            'description' => $courseDetail->CourseDetailDesc,
        ]);
    }


}

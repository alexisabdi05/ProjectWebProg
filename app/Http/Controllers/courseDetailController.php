<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Category;
use App\Models\User;

class courseDetailController extends Controller
{
    public function index($user, $id){
        $user = User::find($user);
        $course = Course::find($id);
        $courseDetail = Course::find($id)->CourseDetail;
        $category = Category::where('id', $course->category_id)->get();
        return view('coursedetail', compact('course','courseDetail','category', 'user'));
    }

    public function updateCheckbox(Request $request)
    {

        $recordId = $request->input('recordId');
        $isChecked = $request->input('isChecked');

        // Update the corresponding record in the database
        $courseDetail = CourseDetail::find($recordId);
        $courseDetail-> CourseStatus = $isChecked;
        $courseDetail->save();

        // Return a response indicating success
        return response()->json(['status' => 'success']);
    }
}

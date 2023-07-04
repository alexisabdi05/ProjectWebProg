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
        $flag = $request->input('flag');
       
        // Retrieve the corresponding record from the database
        $courseDetail = CourseDetail::find($recordId);

        // Update the CourseStatus field based on the checkbox state
        if ($flag == 1) {
            $courseDetail->CourseStatus = 1;
        }else {
            $courseDetail->CourseStatus = 0;
        }
        
        // Save the changes to the database
        $courseDetail->save();

        // Return a response indicating the success or failure
        return response()->json(['success' => $isChecked]);
    }
}

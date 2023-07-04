<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function liveSearch(Request $request)
    {
        $query = $request->input('query');
    
        if (!empty($query)) {
            $searchResults = Course::where('CourseName', 'LIKE', "%$query%")->get();
        } else {
            $searchResults = Course::all();
            $query = '';
        }
    
        return view('partials.live-search', compact('searchResults', 'query'));
    }
    

}

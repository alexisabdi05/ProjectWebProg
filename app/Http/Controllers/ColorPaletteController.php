<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Requests;

class ColorPaletteController extends Controller
{
    public function generateColorPalette(Request $request)
    {
        ddd($request);
        $oldImage = Photo::first();
        if($oldImage){
            Storage::delete($oldImage);
            $path = $request->file('image')->store('color-images');
            Photo::where('id',1)->update(['path'=>$path]);
        } else {
            $path = $request->file('image')->store('color-images');
            Photo::create([
                'path'=>$path
            ]);
        }
        $flaskEndpoint = "http://localhost:5000/generate-color-palette";
        $response = Http::post($flaskEndpoint);

        $colorPalette = $response->json();

        // return redirect()->route('home', ['id' => $user->id]);
        return view('coloroutput', ['colorPalette'=> $colorPalette]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
class ColorPaletteController extends Controller
{
    public function generateColorPalette(Request $request)
    {
        // Memvalidasi dan menyimpan gambar yang diunggah
        // @dd($request->image);
        $image = $request->file('image');
        // @dd($image);
        // $directory = 'temp';
        // if (!is_dir($directory)) {
        //     // Membuat direktori jika belum ada
        //     mkdir($directory);
        //     // echo "Direktori berhasil dibuat.";
        // } else {
        //     // echo "Direktori sudah ada.";
        // }
        if (!File::exists(public_path('temp'))) {
            File::makeDirectory(public_path('temp'));
        }
        $imagePath = $image->store('temp'); // Menyimpan file di direktori temp

        // @dd($imagePath);
        // Mengirim permintaan ke endpoint Flask dengan data gambar
        $flaskEndpoint = "http://localhost:5000/generate-color-palette";

        $response = Http::attach(
            'image',
            file_get_contents(storage_path('app/' . $imagePath)),
            $image->getClientOriginalName()
        )->post($flaskEndpoint);

        $colorPalette = $response->json();

        return view('coloroutput', ['colorPalette' => $colorPalette]);
    }
}

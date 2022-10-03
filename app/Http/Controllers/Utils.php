<?php

namespace App\Http\Controllers;

use App\Http\Controllers\File;

class Utils extends Controller
{
    public static function saveOnePicture(String $folder, File $file)
    {
        $path = 'images/'.$folder; // upload path
        $name = now() . "." . $file->getClientOriginalExtension();
        //dd($name);
        $test = $file->move($path, $name);
        dd($test);

        //dd($data);
        return $test;
        //dd($image);
    }
}

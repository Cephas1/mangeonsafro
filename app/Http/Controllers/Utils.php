<?php

namespace App\Http\Controllers;

use App\Models\ImageCategorie;
use App\Http\Controllers\File;
use App\Models\ImageProduct;

class Utils extends Controller
{
    public static function saveOnePicture(String $folder,int $id, int $key ,$file)
    {
        $path = 'images/'.$folder; // upload path
        $name = date('YmdHis') . $key . "." . $file->getClientOriginalExtension();
        //dd($name);
        $test = $file->move($path, $name);
        //dd($test);

        $data = [
            'product_id' => $id,
            'image_path' => $path."/".$name
        ];

        //dd($data);
        return $image = ImageProduct::create($data);
        //dd($image);
    }
}

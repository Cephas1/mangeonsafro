<?php

namespace App\Http\Controllers;


use App\Models\Image;
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

    public static function savePictures(String $folder,int $id, int $key ,$file)
    {
        $path = 'images/'.$folder; // upload path
        $name = date('YmdHis') . $key . "." . $file->getClientOriginalExtension();
        //dd($name);
        $test = $file->move($path, $name);
        //dd($test);

        $data = [
            'imageable_id' => $id,
            'imageable' => $folder,
            'name' => $path."/".$name
        ];

        //dd($data);
        return $image = Image::create($data);
        //dd($image);
    }

    public static function getPictures(int $id, String $imageable){
        $images = Image::where(['imageable_id'=> $id],['imageable'=> $imageable])->get();

        $data = [];

        foreach ($images as $value) {
            $data[] = $value->name;
        }

        return $data;
    }

    public static function removePictures(int $id, String $imageable){
        $images = Image::where(['imageable_id'=> $id],['imageable'=> $imageable])->delete();

        if(!$images){
            return true;
        }else{
            return false;
        }
    }
}

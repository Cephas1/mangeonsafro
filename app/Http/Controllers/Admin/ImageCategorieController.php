<?php
 
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageCategorie;
use Validator,Redirect,Response,File;
Use App\Image;
 
class ImageCategorieController extends Controller
{
 
    public function index()
    {
        return view('image');
    }
 
    public function save()
    {
       request()->validate([
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('fileUpload')) {
           $destinationPath = 'public/image/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
        }
        $check = Image::insertGetId($insert);
 
        return Redirect::to("image")
        ->withSuccess('Great! Image has been successfully uploaded.');
 
    }
}
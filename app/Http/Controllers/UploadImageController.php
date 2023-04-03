<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    function upload(Request $request){
        // $image = $request->file('image');
        
        // if($request->hasFile('image')){
        //     $new_name = rand().".".$image->getClientOriginalExtension();
        //     $image->move(public_path('/upload/images'),$new_name);
        //     return response()->json($new_name);
        // }
        // else{
        //     return response()->json('image null');
        // }

        $images = $request->file('image');
        $imageName = "";

        foreach($images as $image){
            $new_name = rand().".".$image->getClientOriginalExtension();
            $image->move(public_path('/upload/images'),$new_name);

            $imageName = $imageName.$new_name.",";
        }
        $imagedb = $imageName;
        return response()->json($imagedb);
    }
}

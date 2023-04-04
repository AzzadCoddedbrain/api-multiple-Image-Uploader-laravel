<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MultipleImageModel;

class UploadImageController extends Controller
{
    function multipleImageUpload(Request $request){

        $images = $request->file('image');
        $imageName= "";

        foreach($images as $image){
            $new_name = rand().".".$image->getClientOriginalExtension();
            $image->move(public_path('/upload/images'),$new_name);

            $imageName = $imageName.$new_name.",";
        }
        $imagedb = $imageName;


        $post = MultipleImageModel::create([
            "user_id"=>"usr",
            "description"=>"usr",
            "activities"=>"usr",
            "location"=>"usr",
            "tagged_users"=>"usr",
            "media"=> $imagedb
        ]);



        return response()->json(["image"=>$imagedb,"data"=> $post ]);
    }
}


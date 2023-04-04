<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MultipleImageModel;
use App\Models\postMetaModel;

class UploadImageController extends Controller
{
    // public function multipleImageUpload(Request $request){

    //     $images = $request->file('image');
    //     $imageName= "";

    //     foreach($images as $image){
    //         $new_name = rand().".".$image->getClientOriginalExtension();
    //         $image->move(public_path('/upload/images'),$new_name);
            
    //         $imageName = $imageName.$new_name.",";
    //         if($image){

    //         }
       
    //         $post = postMetaModel::create([
    //             "post_id"=>"annu1",
    //             "key"=> "image",
    //             "value"=>$new_name
    //         ]);
    
       
       
    //     }
    //     $imagedb = $imageName;


       


    //     $post = MultipleImageModel::create([
    //         "user_id"=>"usr",
    //         "description"=>"usr",
    //         "activities"=>"usr",
    //         "location"=>"usr",
    //         "tagged_users"=>"usr",
    //         "media"=> $imagedb
    //     ]);



    //     return response()->json(["image"=>$imagedb,"data"=> $post ]);
    // }


    public function show(){
        

        return DB::table('medias')
        ->join('post_metas','medias.user_id',"=",'post_metas.post_id')
        // ->select('post_metas.*')
        ->where('post_metas.post_id',"annu")
        ->get();

    }

}
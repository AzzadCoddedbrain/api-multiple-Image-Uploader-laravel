<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostMetaModel;

class PostMetaController extends Controller
{
    public function addmedia(Request $request){
        $post = postMetaModel::create([
            "post_id"=>$request->post_id,
            "key"=> $request ->key,
            "value"=>$request->value,
        ]);

        if($post){
            return response()-> json($post);
        }
        else{
            return response()-> json("erro code ka hai");
        }
    }

   

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use  illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Video;
use App\Comment;

class VideoController extends Controller
{
    //
        public function createVideo(){

          return view('video.createVideo');

        }

        public function saveVideo(Request $request){

            //validar el form

          $validatedData = $this->validate($request, [

            'title' => 'required | min:5',
            'description' => 'required',
            'video' => 'mimes:mp4'
           
            ]);


            $video = new  Video();
            $user = \Auth::user();
            $video->user_id = $user->id;
            $video->title = $request->input('title');
            $video->description = $request->input('description');


            //subida de la miniatura

            $image = $request->file('image');
            if ($image) {
                $image_path = time().$image->getClientOriginalName();
                \Storage::disk('images')->put($image_path, \File::get($image));
                 $video->image = $image_path;
            }
              //subida de video
            $video_file = $request->file('video');
            if($video_file){
                $video_path = time().$video_file->getClientOriginalName();
                \storage::disk('videos')->put($video_path,\File::get($video_file));
                $video->video_path=$video_path;
            }


            $video->save();
            
             return redirect()-> route ('home') 
             ->with ( array('message'=>'el video se ha subido correctamente!!'
            ));
            
          
            $video->save();

           

        }
    

        public function getImage($filename){
 
           $file=\Storage::disk('images')->get($filename);
           return new Response($file,200);
         

        }
    
}

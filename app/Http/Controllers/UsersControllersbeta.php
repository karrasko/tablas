
<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use  illuminate\Support\Facades\Storage;
use Synfony\Component\HttpFoundation\Response;

use App\Video;
use App\Comment;
use App\User; 

/* public function index(){

$datos ['user']=User::paginate(5);
return('users.index');
 */
/* 
use App\User; 

use App\Comment;
use App\Video; 

route::get("/",function() {
   
    $videos = Video::all();
    foreach($videos as $video)
    
    {
    
    echo $video->title;
    echo $video->user->email.'<br/>';
    foreach ($video->comments as $comment)
    {
    echo $comment->body;
    }
    echo "<hr/>";
    }
    die();
        return view('welcome');
        
    });
    
    


} */
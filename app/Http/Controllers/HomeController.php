<?php

namespace App\Http\Controllers;
use App\User;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   /*  public function index()
    {
     // $usuarios = DB::table('videos')-> paginate(5);
        $user = User::paginate(10);

        return view('home',array(
            'user'=> $user));
    } */


    public function index()
    {
        /* $usuarios = DB::table('videos')-> paginate(5); */
        $Videos = Video::orderBy('id','desc')->paginate(5);

        return view('home',array(
            'videos'=> $Videos
        ));
    }
}

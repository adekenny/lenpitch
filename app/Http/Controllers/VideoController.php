<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;

class VideoController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }


    public function create(){

        return view('video.create');
    }


    public function watch(){

        if(Auth()->user()->category === 'Jobseeker')
        {
            $video = Video::where('category', 'jobseekers')->first();

            /*$video = Video::where('type', 'administrator')->where('category', 'jobseeker')->get();*/
    
            return view('video.watch', compact('video'));
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            $video = Video::where('category', 'entrepreneurs')->first();

         /*$video = Video::where('type', 'administrator')->where('category', 'jobseeker')->get();*/

            return view('video.entre-watch', compact('video'));
        }
        
    }


    public function store(Request $request)
    {
        $request->validate([

            'video' => ['required', 'max:20000']
        ]);

        try{
             Video::where('user_id', Auth()->user()->id)->delete();

             $path = $request->file('video')->store('videos');

            Auth()->user()->video()->create([
            'video' => $path,
            'type' => '',
            'category' => '',
             ]);
            }
        catch(PostTooLargeException $exception){
            return back()->withError($exception->getMessage())->withInput();
        }


        if(Auth()->user()->category === 'Jobseeker')
        {
            return redirect('/dashboard');
         }
         elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return redirect('/enterpreneur_dashboard');
        }


    }
}

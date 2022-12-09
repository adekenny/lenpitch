<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    
    public function find(Request $request){

        if(($request->category == 'all') && ($request->industry == 'all') && ($request->location == 'all')){

           $users = User::where([['category', 'Jobseeker'], ['status', 'enabled']])
                       ->orWhere([['category', 'Entrepreneur'], ['status', 'enabled']])
   
                        ->get();

             return view('welcome', [
                'users' => $users
            ]);

        }

        if(($request->category != 'all') && ($request->industry == 'all') && ($request->location == 'all')){

             $users = User::where([['category', '=', $request->category], ['status', 'enabled']])->get();

            return view('welcome', [
                'users' => $users
            ]);
        }

        if(($request->category == 'all') && ($request->industry == 'all') && ($request->location != 'all')){

            $users = DB::table('users')
            ->join('photos', 'users.id', '=', 'photos.user_id')
            ->join('videos', 'users.id', '=', 'videos.user_id')
            ->join('titlecovers', 'users.id', '=', 'titlecovers.user_id')
            ->join('workexperiences', 'users.id', '=', 'workexperiences.user_id')
            ->select('users.*', 'titlecovers.*', 'photos.photo', 'videos.video')
            ->where('workexperiences.location', '=', $request->location)
             ->where('users.status', '=', 'enabled')
            ->get();

          
            return view('search_result', [
                'users' => $users
            ]);
              
        }


        if(($request->category != 'all') && ($request->industry == 'all') && ($request->location != 'all')){


            /* $users = DB::table('users')
                 ->join('workexperiences', function ($join) use ($request) {
                      $join->on('users.id', '=', 'workexperiences.user_id')
                          ->where([['workexperiences.location', '=', $request->location], ['users.category', '=', $request->category]]); })->get()->toArray();
    
                          $users = User::hydrate($users);      
           
                          return view('welcome', [
                           'users' => $users
                       ]);
            */


            
            $users = DB::table('users')
            ->join('photos', 'users.id', '=', 'photos.user_id')
            ->join('videos', 'users.id', '=', 'videos.user_id')
            ->join('titlecovers', 'users.id', '=', 'titlecovers.user_id')
            ->join('workexperiences', 'users.id', '=', 'workexperiences.user_id')
            ->select('users.*', 'titlecovers.*', 'photos.photo', 'videos.video')
            ->where('users.category', '=', $request->category)
             ->where('users.status', '=', 'enabled')
            ->where('workexperiences.location', '=', $request->location)
            ->get();

          
            return view('search_result', [
                'users' => $users
            ]);
        }


        if(($request->category == 'all') && ($request->industry != 'all') && ($request->location != 'all')){


           /* $users = DB::table('users')
                 ->join('workexperiences', function ($join) use ($request) {
                      $join->on('users.id', '=', 'workexperiences.user_id')
                          ->where([['workexperiences.location', '=', $request->location], ['workexperiences.industry', '=', $request->industry]]); })->get()->toArray();
    
                          $users = User::hydrate($users);      
           
                          return view('welcome', [
                           'users' => $users
                       ]);
            */


            $users = DB::table('users')
            ->join('photos', 'users.id', '=', 'photos.user_id')
            ->join('videos', 'users.id', '=', 'videos.user_id')
            ->join('titlecovers', 'users.id', '=', 'titlecovers.user_id')
            ->join('workexperiences', 'users.id', '=', 'workexperiences.user_id')
            ->select('users.*', 'titlecovers.*', 'photos.photo', 'videos.video')
            ->where('workexperiences.industry', '=', $request->industry)
            ->where('workexperiences.location', '=', $request->location)
             ->where('users.status', '=', 'enabled')
            ->get();

          
            return view('search_result', [
                'users' => $users
            ]);


        }


        if(($request->category != 'all') && ($request->industry != 'all') && ($request->location != 'all')){


           /* $users = DB::table('users')
                 ->join('workexperiences', function ($join) use ($request) {
                      $join->on('users.id', '=', 'workexperiences.user_id')
                          ->where([['workexperiences.location', '=', $request->location], ['workexperiences.industry', '=', $request->industry], ['users.category', '=', $request->category]]); })->get()->toArray();
    
                          $users = User::hydrate($users);      
           
                          return view('welcome', [
                           'users' => $users
                       ]);
            */


            $users = DB::table('users')
            ->join('photos', 'users.id', '=', 'photos.user_id')
            ->join('videos', 'users.id', '=', 'videos.user_id')
            ->join('titlecovers', 'users.id', '=', 'titlecovers.user_id')
            ->join('workexperiences', 'users.id', '=', 'workexperiences.user_id')
            ->select('users.*', 'titlecovers.*', 'photos.photo', 'videos.video')
            ->where('users.category', '=', $request->category)
             ->where('users.status', '=', 'enabled')
            ->where('workexperiences.industry', '=', $request->industry)
            ->where('workexperiences.location', '=', $request->location)
            ->get();

          
            return view('search_result', [
                'users' => $users
            ]);



        }


        if(($request->category == 'all') && ($request->industry != 'all') && ($request->location == 'all')){


           /* $users = DB::table('users')
                 ->join('workexperiences', function ($join) use ($request) {
                      $join->on('users.id', '=', 'workexperiences.user_id')
                          ->where('workexperiences.industry', '=', $request->industry); })->get()->toArray();
    
                          $users = User::hydrate($users);      
           
                          return view('welcome', [
                           'users' => $users
                       ]);  */


                       $users = DB::table('users')
                       ->join('photos', 'users.id', '=', 'photos.user_id')
                       ->join('videos', 'users.id', '=', 'videos.user_id')
                       ->join('titlecovers', 'users.id', '=', 'titlecovers.user_id')
                       ->join('workexperiences', 'users.id', '=', 'workexperiences.user_id')
                       ->select('users.*', 'titlecovers.*', 'photos.photo', 'videos.video')
                       ->where('workexperiences.industry', '=', $request->industry)
                        ->where('users.status', '=', 'enabled')
                       ->get();
           
                     
                       return view('search_result', [
                           'users' => $users
                       ]);



        }


        if(($request->category != 'all') && ($request->industry != 'all') && ($request->location == 'all')){


            /* $users = DB::table('users')
                 ->join('workexperiences', function ($join) use ($request) {
                      $join->on('users.id', '=', 'workexperiences.user_id')
                          ->where([['workexperiences.industry', '=', $request->industry], ['users.category', '=', $request->category]]); })->get()->toArray();
    
                          $users = User::hydrate($users);      
           
                          return view('welcome', [
                           'users' => $users
                       ]);  */


                       $users = DB::table('users')
                       ->join('photos', 'users.id', '=', 'photos.user_id')
                       ->join('videos', 'users.id', '=', 'videos.user_id')
                       ->join('titlecovers', 'users.id', '=', 'titlecovers.user_id')
                       ->join('workexperiences', 'users.id', '=', 'workexperiences.user_id')
                       ->select('users.*', 'titlecovers.*', 'photos.photo', 'videos.video')
                       ->where('users.category', '=', $request->category)
                        ->where('users.status', '=', 'enabled')
                       ->where('workexperiences.industry', '=', $request->industry)
                       ->get();
           
                     
                       return view('search_result', [
                           'users' => $users
                       ]);

                
            $error_message = "Sorry, your search did not produce any result. Please review your search criteria and try again.";

            return view('empty_result', [
                'error_message' => $error_message
            ]);

        }

        


        


       
    }
}

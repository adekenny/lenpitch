<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\Auth;
use App\Models\Employer;
use App\Models\Video;
use App\Models\Bookmark;


class WelcomeController extends Controller
{
    

   public function index(){

        $users = User::where([['category', 'Jobseeker'], ['status', 'enabled']])
                       ->orWhere([['category', 'Entrepreneur'], ['status', 'enabled']])
   
                        ->get();

        return view('welcome', [
            'users' => $users
        ]);
    }


    public function largeVideo($user){

        $all_user = User::where('category', 'Jobseeker')
                       ->orWhere('category', 'Entrepreneur')
                        ->get();

        $selected_user = User::find($user);

    return view('enlarged_video', [

        'users' => $all_user,
        'selected_user' => $selected_user
    ]);

    }


    public function enterProfile(User $user){

        $user_info = User::find($user);

        if(Auth()->user()->category === 'Employer')
        {
            return view('full_jobseeker_profile', [
                'user' => $user_info
            ]);
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            return view('investor.view_entrepreneur_profile', compact('user'));
        }
        
    }
    
    
    public function aboutUs(){

        return view('about-us');
    }

    public function privacyPolicy(){

        return view('privacy-policy');
    }


    public function termsConditions(){

        return view('terms-and-conditions');
    }



}

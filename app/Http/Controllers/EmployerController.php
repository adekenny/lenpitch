<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Employer;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bookmark;
use App\Models\Message;


class EmployerController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }


    public function create(){
        return view('employer.company');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'company' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'industry' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
        ]);


        Employer::where('user_id', Auth()->user()->id)->delete();

        Auth()->user()->employer()->create([
            'company' => $request->company,
            'address' => $request->address,
            'state' => $request->state,
            'country' => $request->country,
            'industry' => $request->industry,
        ]);

        return redirect('/employer_dashboard');
       
    }


    public function edit(Employer $employer){

        return view('employer.edit-company', compact ('employer'));
    }


    public function update(Request $request){

        $data = $request->validate([
            'company' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'industry' => ['required', 'string', 'max:255'],
        ]);


        auth()->user()->employer()->update($data);
        return redirect('/employer_dashboard');
    }


    public function dashboard(){

        return view('employer.dashboard');
    }


    public function watchVideo(){

        
        if(Auth()->user()->category === 'Employer')
        {
            $video = Video::where('category', 'employers')->first();

            /*$video = Video::where('type', 'administrator')->where('category', 'jobseeker')->get();*/

            return view('employer.watch_video', compact('video'));
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            $video = Video::where('category', 'investors')->first();

         /*$video = Video::where('type', 'administrator')->where('category', 'jobseeker')->get();*/

            return view('investor.watch_video', compact('video'));
        }
        
        
        
    }


    public function viewProfiles(){

        if(Auth()->user()->category === 'Employer')
        {
            $users = DB::table('users')->where('category', '=', 'Jobseeker')->get();
            return view('employer.view_profiles', compact('users'));
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            $users = DB::table('users')->where('category', '=', 'Entrepreneur')->get();
            return view('investor.view_profiles', compact('users'));
        }

    }


    public function viewUserProfile(User $user){

        if(Auth()->user()->category === 'Employer')
        {
            return view('employer.view_jobseeker_profile', compact('user'));
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            return view('investor.view_entrepreneur_profile', compact('user'));
        }

        
    }


    public function bookmarkProfile(User $user){

        if(Auth()->user()->category === 'Employer')
        {
            Auth()->user()->bookmarks()->create([
                'profile_id' => $user->id,
                'firstname' => $user->firstname,
                'surname' => $user->surname,
                'phone' => $user->phone,
                'email' => $user->email,
                'gender' => $user->gender,
                'category' => $user->category,
            ]);
    
            return redirect('employer/bookmarks');
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            Auth()->user()->bookmarks()->create([
                'profile_id' => $user->id,
                'firstname' => $user->firstname,
                'surname' => $user->surname,
                'phone' => $user->phone,
                'email' => $user->email,
                'gender' => $user->gender,
                'category' => $user->category,
            ]);
    
            return redirect('employer/bookmarks');
        }

            
    }


    public function composeMessage(User $user){

        if(Auth()->user()->category === 'Employer')
        {
            return view('employer.compose_message', compact('user'));
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            return view('investor.compose_message', compact('user'));
        }

    }


    Public function sendMessage(Request $request){

        $date = date('Y-m-d H:i:s');

        Auth()->user()->messages()->create([
            'receiver_id' => $request->receiver_id,
            'firstname' => $request->firstname,
            'surname' => $request->surname,
            'title' => $request->title,
            'message' => $request->description,
            'sent_date' => $date,
        ]);

        return redirect('employer/view_sentmessages');
    }


    public function viewSentMessages(){

        if(Auth()->user()->category === 'Employer')
        {
            $messages = DB::table('messages')->where('user_id', '=', Auth()->user()->id)->get();

            return view('employer.view_messages', compact('messages'));
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            $messages = DB::table('messages')->where('user_id', '=', Auth()->user()->id)->get();

            return view('investor.view_messages', compact('messages'));
        }


    }



    public function deleteMessage($receiver_id){

        if(Auth()->user()->category === 'Employer')
        {
            DB::table('messages')->where('user_id', '=', Auth()->user()->id)
                              ->where('receiver_id', '=', $receiver_id)->delete();

             $messages = DB::table('messages')->where('user_id', '=', Auth()->user()->id)->get();

             return view('employer.view_messages', compact('messages'));          
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            DB::table('messages')->where('user_id', '=', Auth()->user()->id)
            ->where('receiver_id', '=', $receiver_id)->delete();

            $messages= DB::table('messages')->where('user_id', '=', Auth()->user()->id)->get();

            return view('investor.view_messages', compact('messages'));          
        }
    }


    public function bookmarks(){

        if(Auth()->user()->category === 'Employer')
        {
            $bookmark = DB::table('bookmarks')->where('user_id', '=', Auth()->user()->id)->get();

            return view('employer.viewbookmarks', compact('bookmark'));
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            $bookmark = DB::table('bookmarks')->where('user_id', '=', Auth()->user()->id)->get();

             return view('investor.viewbookmarks', compact('bookmark'));
        }


        
    }


    public function deleteBookmark($profile_id){

        if(Auth()->user()->category === 'Employer')
        {
            DB::table('bookmarks')->where('user_id', '=', Auth()->user()->id)
                              ->where('profile_id', '=', $profile_id)->delete();

             $bookmark = DB::table('bookmarks')->where('user_id', '=', Auth()->user()->id)->get();

             return view('employer.viewbookmarks', compact('bookmark'));          
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            DB::table('bookmarks')->where('user_id', '=', Auth()->user()->id)
            ->where('profile_id', '=', $profile_id)->delete();

            $bookmark = DB::table('bookmarks')->where('user_id', '=', Auth()->user()->id)->get();

            return view('investor.viewbookmarks', compact('bookmark'));          
        }

    }
    
    
     public function enterProfile($user){

        $user_info = User::find($user);

        if(Auth()->user()->category === 'Employer')
        {
            return view('employer.view_jobseeker_profile', [
                'user' => $user_info
            ]);
        }
        elseif(Auth()->user()->category === 'Investor')
        {
            return view('investor.view_entrepreneur_profile', compact('user'));
        }
        elseif(Auth()->user()->category === 'Jobseeker'){

            $user = User::find(Auth()->user()->id);

            return view('dashboard', compact('user'));
        }
        elseif(Auth()->user()->category === 'Entrepreneur'){

            $user = User::find(Auth()->user()->id);

            return view('enterpreneur.dashboard', compact('user'));
        }
        elseif(Auth()->user()->category == 'admin')
		{
			return redirect('/admin_dashboard');
		}



        
    }



}

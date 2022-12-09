<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\Bookmark;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class SettingController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    
    public function edit(){
        $userid = Auth()->user()->id;

        $getuser = User::findorfail($userid);

        return view('edit-account-setting', [
            'user' => $getuser
        ]);
    }


    public function update(Request $request)
    {
        $userid = Auth()->user()->id;

        $data = $request->validate([
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $data['password'] = Hash::make($request->password);

        User::where('id', $userid)->update($data);

        if(Auth()->user()->category === 'Jobseeker')
        {
            return redirect('/dashboard');
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return redirect('/enterpreneur_dashboard');
        }
    }


    public function disabledAccount(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('user_account_disabled');
    }


    public function myMessages(){

        if(Auth()->user()->category === 'Jobseeker')
        {
            $messages = DB::table('messages')->where('receiver_id', '=', Auth()->user()->id)->get();

            return view('my_messages', compact('messages'));
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            $messages = DB::table('messages')->where('receiver_id', '=', Auth()->user()->id)->get();

            return view('enterpreneur/my_messages', compact('messages'));
        }

       
    }


    public function senderProfile($user){

        if(Auth()->user()->category === 'Jobseeker')
        {
            $messages = DB::table('messages')->where('receiver_id', '=', Auth()->user()->id)->get();

             $sender = User::find($user);

             return view('message_sender_profile', [
                    'messages' => $messages,
                    'sender' => $sender,
            ]);
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            $messages = DB::table('messages')->where('receiver_id', '=', Auth()->user()->id)->get();

             $sender = User::find($user);

             return view('enterpreneur/message_sender_profile', [
                    'messages' => $messages,
                    'sender' => $sender,
            ]);
        }

        

    }



    public function deleteMessage($id){

        if(Auth()->user()->category === 'Jobseeker')
        {
            DB::table('messages')->where('id', '=', $id)->delete();

            $messages = DB::table('messages')->where('receiver_id', '=', Auth()->user()->id)->get();
    
            return view('my_messages', compact('messages'));
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            DB::table('messages')->where('id', '=', $id)->delete();

            $messages = DB::table('messages')->where('receiver_id', '=', Auth()->user()->id)->get();

            return view('enterpreneur/my_messages', compact('messages'));
        }

        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\VideoController;
use App\Models\Video;
use All\Models\Admin;
use App\Models\User;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\TitlecoverController;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function dashboard(){

        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }


    public function uploadVideo(){
        return view('admin.upload_video');
    }


    public function storeVideo(Request $request){

        $request->validate([

            'video' => ['required', 'max:20000'],
            'category' =>['required', 'max:200'],
            'type' => '',
        ]);

        try{
            
            
            Video::where('user_id', Auth()->user()->id)->where('category', $request->category)->delete();

            /*
            $file = $request->file('video');
             $extension = $file->getClientOriginalExtension(); */

             $path = $request->file('video')->storeAs('advideos', $request->category.'.'.$request->file('video')->extension());

            Auth()->user()->video()->create([
            'video' => $path,
            'type' => 'administrator',
            'category' => $request->category
             ]);
            }
        catch(PostTooLargeException $exception){
            return back()->withError($exception->getMessage())->withInput();
        }


        return redirect('/admin_dashboard');
    }


    public function viewUser(User $user){

        /*
        $data = DB::table('users')
            ->join('educations', 'users.id', '=', 'educations.user_id')
            ->join('titlecovers', 'users.id', '=', 'titlecovers.user_id')
            ->join('photos', 'users.id', '=', 'photos.user_id')
            ->select('users.*', 'titlecovers.title', 'titlecovers.description', 'educations.institution', 'educations.qualification', 'photos.photo')
            ->where('users.id', $user->id)
            ->get();
        */

        
        if($user->category === 'Jobseeker')
        {
            return view('admin.view_jobseeker_profile', compact('user'));
        }
        elseif($user->category === 'Entrepreneur')
        {
            return view('admin.view_entrepreneur_profile', compact('user'));
        }
        elseif($user->category === 'Employer')
        {
            return view('admin.view_employer_profile', compact('user'));
        }
        elseif($user->category === 'Investor')
        {
            return view('admin.view_investor_profile', compact('user'));
        }
        elseif($user->category === 'admin')
        {
            return redirect('/admin_dashboard');
        }      
        
    }


    public function viewStatus(){

        $users = User::all();
        return view('admin.view_status', compact('users'));
    }


    public function disable_status($id){
        User::where('id', $id)->update(['status' => 'disabled']);

        return redirect('admin/view_status');
    }

    public function enable_status($id){
        User::where('id', $id)->update(['status' => 'enabled']);

        return redirect('admin/view_status');
    }

    public function implementVerification(){

        $users = User::all();
        return view('admin.verify_user', compact('users'));
    }

    public function verifyUser($id){
        User::where('id', $id)->update(['verification' => 'verified']);

        return redirect('admin/implement_verification');
    }

    public function unverifyUser($id){
        User::where('id', $id)->update(['verification' => 'unverified']);

        return redirect('admin/implement_verification');
    }
    
    
    public function find(Request $request){

        $users = DB::table('users')->where('email', 'like', $request->email.'%')->get();

        return view('admin.searched_users', compact('users'));

       
    }



}

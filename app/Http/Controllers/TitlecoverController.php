<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titlecover;
use App\Http\Controllers;

class TitlecoverController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    
    public function create()
    {
        if(Auth()->user()->category === 'Jobseeker')
        {
            return view('create-cover-letter');
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return view('entre-create-cover-letter');
        }
        elseif((Auth()->user()->category === 'Employer') || (Auth()->user()->category === 'Investor'))
        {
            return view('employer.create-cover-letter');
        }

        
    }


    public function store(Request $request)
    {
        
        if(Auth()->user()->category === 'Jobseeker')
        {
            $request->validate([

                'title' => '',
                'description' => '',
    
            ]);
    
            Titlecover::where('user_id', Auth()->user()->id)->delete();
    
            auth()->user()->titlecover()->create([
    
                'title' => $request->title,
                'description' => $request->description,
            ]);
    
            return redirect('/dashboard');
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            $request->validate([

               
                'description' => ['required', 'string', 'max:255'],
    
            ]);
    
            Titlecover::where('user_id', Auth()->user()->id)->delete();
    
            auth()->user()->titlecover()->create([
    
                'title' => '',
                'description' => $request->description,
            ]);

            
            return redirect('/enterpreneur_dashboard');
        }
        elseif((Auth()->user()->category === 'Employer') || (Auth()->user()->category === 'Investor'))
        {
            $request->validate([

               
                'description' => ['required', 'string', 'max:255'],
    
            ]);
    
            Titlecover::where('user_id', Auth()->user()->id)->delete();
    
            auth()->user()->titlecover()->create([
    
                'title' => '',
                'description' => $request->description,
            ]);

            
            return redirect('/employer_dashboard');
        }


    }


    public function edit(Titlecover $titlecover){

        if(Auth()->user()->category === 'Jobseeker')
        {
            return view('edit-titlecover', compact ('titlecover'));
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return view('entre-edit-titlecover', compact ('titlecover'));
        }
        elseif((Auth()->user()->category === 'Employer') || (Auth()->user()->category === 'Investor'))
        {
            return view('employer.edit-cover-letter', compact ('titlecover'));
        }


       

    }


    public function update(Request $request, Titlecover $titlecover)
    {
        

        if(Auth()->user()->category === 'Jobseeker')
        {
            $data = $request->validate([
                'title' => '',
                'description' => '',
            ]);
    
    
            auth()->user()->titlecover()->update($data);
            return redirect('/dashboard');
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            $data = $request->validate([
                'title' => '',
                'description' => ['required', 'string', 'max:255'],
            ]);
    
    
            auth()->user()->titlecover()->update($data);
            return redirect('/enterpreneur_dashboard');
        }
        elseif((Auth()->user()->category === 'Employer') || (Auth()->user()->category === 'Investor'))
        {
            $data = $request->validate([
                'title' => '',
                'description' => ['required', 'string', 'max:255'],
            ]);
    
    
            auth()->user()->titlecover()->update($data);
            return redirect('/employer_dashboard');
        }


    }


}

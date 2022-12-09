<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workexperience;
use App\Models\User;

class WorkexperienceController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth()->user()->category === 'Jobseeker')
        {
            return view('workexperience.create');
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return view('workexperience.entre-create');
        }
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $start_date = $request->start_day.'-'.$request->start_month.'-'.$request->start_year;
        $end_date = $request->end_day.'-'.$request->end_month.'-'.$request->end_year;
        $experience_years = $request->end_year - $request->start_year;

        if(Auth()->user()->category === 'Jobseeker')
        {
            $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'employment_type' => ['required', 'string', 'max:255'],
                'company_name' => ['required', 'string', 'max:255'],
                'location' => ['required', 'string', 'max:255'],
                
                'industry' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
          
            ]);

                auth()->user()->workexperiences()->create([

                    'title' => $request->title,
                    'employment_type' => $request->employment_type,
                    'company_name' => $request->company_name,
                    'location' => $request->location,
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'experience_years' => $experience_years,
                    'industry' => $request->industry,
                    'description' => $request->description
                ]);  
                
                return redirect('/dashboard');

        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            $data = $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'employment_type' => '',
                'company_name' => '',
                'location' => ['required', 'string', 'max:255'],
                'start_date' => '',
                'end_date' => '',
                'experience_years' => '',
                'industry' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
          
            ]);

                auth()->user()->workexperiences()->create($data);  
                
                return redirect('/enterpreneur_dashboard');

        }


          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Workexperience $workexperience)
    {
        if(Auth()->user()->category === 'Jobseeker')
        {
            return view('workexperience.show', compact('workexperience'));
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return view('workexperience.entre-show', compact('workexperience'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Workexperience $workexperience)
    {
        if(Auth()->user()->category === 'Jobseeker')
        {
            return view('workexperience.edit', compact('workexperience'));
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return view('workexperience.entre-edit', compact('workexperience'));
        }

       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workexperience $workexperience)
    {
        if(isset($_POST['update']))
        {
            if(Auth()->user()->category === 'Jobseeker')
            {
                $data = $request->validate([
                    'title' => ['required', 'string', 'max:255'],
                    'employment_type' => ['required', 'string', 'max:255'],
                    'company_name' => ['required', 'string', 'max:255'],
                    'location' => ['required', 'string', 'max:255'],
                    'start_date' => ['required', 'string', 'max:255'],
                    'end_date' => ['required', 'string',  'max:255'],
                    'industry' => ['required', 'string', 'max:255'],
                    'description' => ['required', 'string', 'max:255'],
                 ]);
    
    
                 Workexperience::where('id', $workexperience->id)->update($data);
    
                return redirect('/dashboard');
            }
            elseif(Auth()->user()->category === 'Entrepreneur')
            {
                $data = $request->validate([
                    'title' => ['required', 'string', 'max:255'],
                     'employment_type' => '',
                    'company_name' => '',
                     'location' => ['required', 'string', 'max:255'],
                     'start_date' => '',
                     'end_date' => '',
                     'experience_years' => '',
                     'industry' => ['required', 'string', 'max:255'],
                     'description' => ['required', 'string', 'max:255'],
                 ]);
    
    
                 Workexperience::where('id', $workexperience->id)->update($data);
    
                return redirect('/enterpreneur_dashboard');
            }

            
        }
        elseif(isset($_POST['delete']))
        {
            Workexperience::where('id', $workexperience->id)->delete();

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workexperience $workexperience)
    {
        Workexperience::where('id', $workexperience->id)->delete();

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

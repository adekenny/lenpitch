<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\User;

class EducationController extends Controller
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
            return view('education.create');
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return view('education.entre-create');
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

           $request->validate([
                'institution' => ['required', 'string', 'max:255'],
                'qualification' => ['required', 'string', 'max:255'],
                'study_field' => ['required', 'string', 'max:255'],
               
                'grade' => ['required', 'string', 'max:255'],
          
            ]);

         

                auth()->user()->educations()->create([
                'institution' => $request->institution,
                'qualification' => $request->qualification,
                'study_field' => $request->study_field,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'grade' => $request->grade,
                
                ]);  

                if(Auth()->user()->category === 'Jobseeker')
                {
                    return redirect('/dashboard');
                 }
                 elseif(Auth()->user()->category === 'Entrepreneur')
                {
                    return redirect('/enterpreneur_dashboard');
                }

                
                

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        if(Auth()->user()->category === 'Jobseeker')
        {
            return view('education.show', compact('education'));
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return view('education.entre-show', compact('education'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        if(Auth()->user()->category === 'Jobseeker')
        {
            return view('education.edit', compact('education'));
        }
        elseif(Auth()->user()->category === 'Entrepreneur')
        {
            return view('education.entre-edit', compact('education'));
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        if(isset($_POST['update']))
        {
             $data = $request->validate([
                'institution' => ['required', 'string', 'max:255'],
                'qualification' => ['required', 'string', 'max:255'],
                'study_field' => ['required', 'string', 'max:255'],
                'start_date' => ['required', 'string', 'max:255'],
                'end_date' => ['required', 'string',  'max:255'],
                'grade' => ['required', 'string', 'max:255'],
             ]);


             Education::where('id', $education->id)->update($data);

             if(Auth()->user()->category === 'Jobseeker')
             {
                return redirect('/dashboard');
             }
             elseif(Auth()->user()->category === 'Entrepreneur')
             {
                return redirect('/enterpreneur_dashboard');
             }
     
        }
        elseif(isset($_POST['delete']))
        {
            Education::where('id', $education->id)->delete();

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
    public function destroy(Education $education)
    {
        Education::where('id', $education->id)->delete();

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

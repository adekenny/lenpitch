<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => '',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'category' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
                        	$secret = '6Lf5kMEdAAAAADnq8QVewAvNOl3CNnTkqOAAPTQI';

   							 $response = $request->input('g-recaptcha-response');

        					$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response);

        					$responseData = json_decode($verifyResponse);

       						 if(!$responseData->success)
							 {
							     $captcha_error = "Please verify you are not a robot to submit registration";
							     
							     return view('auth.register', [
							         'captcha_error' => $captcha_error,
							         'firstname' => $request->firstname,
							         'surname' => $request->surname,
							         ]);
							     
							 }
							 else
							 {
		

                                $user = User::create([
                               'firstname' => $request->firstname,
                                 'surname' => $request->surname,
                              'phone' => $request->phone,
                             'email' => $request->email,
                             'category'=> $request->category,
                             'gender' => $request->gender,
                             'user_type' => 'user',
                             'status' => 'enabled',
                             'verification'=> 'unverified',
                             'password' => Hash::make($request->password),
                             ]);


                                 event(new Registered($user));

                                  Auth::login($user);
        

                                 return redirect(RouteServiceProvider::HOME);
        
							 }
    }
}

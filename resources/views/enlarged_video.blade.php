<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.15.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <title>Lens Pitch App</title>
</head>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" width="50" height="50" /></a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button"
                    onclick="toggleNavbar('example-collapse-navbar')">
            <i class="text-white fas fa-bars"></i>
          </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">


                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto pt-2">
                    <li class="flex items-center">

                    </li>
                    <li class="flex items-center">

                    </li>
                    <li class="flex items-center">

                    </li>
                    <li class="flex items-center">
                    @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-white dark:text-white underline"><button class="bg-yellow-500 text-white text-1xl active:bg-gray-100 text-s uppercase px-6 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                 Dashboard
              </button></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white dark:text-white underline"><button class="bg-yellow-500 text-white text-1xl active:bg-gray-100 text-s uppercase px-6 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                 Log-In
              </button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mx-8 text-white dark:text-gray-500 text-1xl">Sign-Up</a>
                        @endif
                    @endauth
                
@endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="relative pt-10 pb-32 flex content-center items-center justify-center" style="min-height: 55vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("lenspitch/public/images/header_img_newest.jpg");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h4 class="text-white font-semibold text-4xl mt-18">
                                Your career success story starts here
                            </h4>

                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px;">

            </div>
        </div>
        <section class="pb-20 bg-grey-300 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center  mb-5 shadow-lg rounded-full">
                                     <img src="{{ asset('images/tie.png') }}" class="w-50 h-16"/>
                                </div>
                                <h6 class="text-2xl font-semibold">Job seekers | Entrepreneurs</h6>
                                <p class="mt-2 mb-4 text-gray-600 mt-10">
                                    Gain the competitive advantage by uploading a 60 seconds videos to market your skills and ideas to potential employers and investors
                                </p>
                                <a href="{{ route('register') }}"> <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">
                                  Sign-up
                              </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="flex-auto" style="margin: auto;">

                                <img src="{{ asset('images/logo_new.png') }}" width="450" height="400" />


                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center  mb-5 shadow-lg rounded-full">
                                     <img src="{{ asset('images/brief.png') }}" class="w-50 h-16"/>
                                </div>
                                <h6 class="text-2xl font-semibold">Employers | Investors</h6>
                                <p class="mt-2 mb-4 text-gray-600 mt-10">
                                    Make recruitment decisions faster......gain better understanding of applicants skills and potentials before contacting them for further interview.
                                </p>
                               <a href="#"> <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">
                                  Sign-up
                              </button></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </section>


        <section class="pb-20 relative block bg-black">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon
              class="text-black fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
            </div>
            <section class="bg-black py-8 px-12">
                <h1 class="w-full my-6 text-5xl font-bold leading-tight text-center text-white pb-300">
                    How it works
                </h1>
                <ul class="w-full steps mt-4">
                    <li class="step step-info text-white font-semibold">Sign-up</li>
                    <li class="step step-info text-white font-semibold">Upload Profile & CV</li>
                    <li class="step step-info text-white font-semibold">Upload 90 seconds Video</li>
                    <li class="step step-info text-white font-semibold">Submit to Publish</li>
                </ul>
            </section>

        </section>

    </main>
<footer class="relative bg-gray-300 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon
          class="text-gray-300 fill-current"
          points="2560 0 2560 100 0 100"
        ></polygon>
      </svg>
        </div>
              
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                @foreach($users as $user)
                <div class="grid grid-cols-7 gap-4 md:w-2/3 md:h-auto m-auto bg-white rounded-lg shadow-md dark:bg-gray-400 p-6 my-4">
                    <div class="col-span-5 w-full h-auto">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-light text-gray-600 dark:text-gray-400">Created: @php

$join_date = substr($user->created_at, 0, 10);
$join = strtotime($join_date);
$formated_date = date("d-m-Y", $join);
echo $formated_date;

@endphp</span>
<div class="text-sm font-light text-gray-600 dark:text-gray-400">{{ $user->category }}</div>
                            <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-red-600 rounded cursor-pointer hover:bg-gray-500" href="{{ url('enter_profile/'.$user->id) }}">View Profile</a>
                        </div>
                        <div class="mt-2">
                            <a href="#" class="text-1xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">@if($user->firstname) {{$user->firstname}} @endif @if($user->surname) {{$user->surname}} @endif - @if($user->titlecover) {{ $user->titlecover->title }} @endif</a>&nbsp;&nbsp;@if($user->verification == 'verified') <img src="{{ asset('images/verify.png') }}" width="30"
                                height="30" style="float: left;" /> @endif
                            @if($user->titlecover) 
                            <p class="mt-2 text-gray-600 dark:text-gray-300 text-sm">{{$user->titlecover->description}}</p>
                            @endif
                        </div>

                        <div class="flex items-center mt-4">
                            @if($user->photo)
                            <img class="hidden object-cover w-18 h-14 mx-4 rounded-full sm:block" src="{{ asset('lenspitch/public/storage/'.$user->photo->photo) }}" alt="avatar">@endif &nbsp;&nbsp; &nbsp;&nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="grey">
                     
                       </svg> &nbsp;&nbsp;&nbsp;&nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="white" viewBox="0 0 24 24" stroke="grey">
                       
                       </svg>

                        </div>
                    </div>
                   
                    <div class="bg-white w-full h-auto col-span-2">
                        @if($user->video)
                        <video width="700" height="220" controls>
     
                            <source src="{{ asset('lenspitch/public/storage/'.$user->video->video) }}" type="video/mp4">
                           
          
                        </video>
                        <div class="text-sm"><a href="{{ url('view_large_video/'.$user->id) }}"><b>View enlarged video</b></a></div>
                         @else
                            <img src="{{ asset('lenspitch/public/images/vd.jpg') }}" width="250" height="200" />
                        @endif
                        
                    </div>
                   
                   
                </div>
                
               @endforeach 

            </div>



        </div>
    </footer>

   <footer class="relative bg-gray-600 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-white">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold text-white"></h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-300">
                       
                    </h5>
                    <div class="mt-6 flex justify-start">
                        <img src="{{ asset('images/facebook.png') }}" class="w-10 h-10 mr-2"/>
                        <img src="{{ asset('images/twittter.png') }}" class="w-10 h-10 mr-2"/>
                        <img src="{{ asset('images/instagram.png') }}" class="w-10 h-10"/>
                    </div>
                    
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-white text-sm font-semibold mb-2">Useful Links</span
                >
                <ul class="list-unstyled">
                  <li>
                   &nbsp;
                  </li>
                  <li class="mb-4">
                    <a
                      class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >Privacy Policy</a
                    >
                  </li>
                  <li class="mb-4">
                    <a
                      class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >Terms and Conditions</a
                    >
                  </li>
                  <li>
                    &nbsp;
                  </li>
                </ul>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <span
                  class="block uppercase text-white text-sm font-semibold mb-2"
                  >Contact Us</span
                >
                <ul class="list-unstyled">
                <li>
                  &nbsp;  
                    </li>
                  <li class="mb-4">
                  Call : + 1 800 641 9070 
                  </li>
                  <li>
                  Email :  talk@lenspitch.com 
                  </li>
                  
                  <li>
                    
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
             © 2021 The Jobshow Internatonal
             
            </div>
          </div>
        </div>
      </div>
    </footer>
    <section class="max-w-4xl mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 pt-1">
    <!-- overlay -->
<div id="modal_overlay" class="absolute inset-0 bg-black bg-opacity-80 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

    <!-- modal -->
<div id="modal" class="opacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 md:h-auto bg-white rounded shadow-lg transition-opacity transition-transform duration-300">

    <!-- button close -->
    <button 
    onclick="openModal(false)"
     class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
        &cross;
      </button>

    

    <!-- header -->
    <div class="px-4 py-3 border-b border-gray-200">
  
      <div class="mb-4"><a class="px-3 py-2 mb-4 text-sm font-bold text-gray-100 bg-red-600 rounded cursor-pointer hover:bg-gray-500" href="{{ url('enter_profile/'.$selected_user->id) }}">View Profile</a></div>
      <video width="700" height="270" controls autoplay>
     
      <source src="{{ asset('lenspitch/public/storage/'.$selected_user->video->video) }}" type="video/mp4">
          
     </video>
    
                
    
    </div>
    </div>

    </div>

    <script>
    const modal_overlay = document.querySelector('#modal_overlay');
    const modal = document.querySelector('#modal');

    function openModal (value){
    const modalCl = modal.classList
    const overlayCl = modal_overlay

    if(value){
    overlayCl.classList.remove('hidden')
    setTimeout(() => {
        modalCl.remove('opacity-0')
        modalCl.remove('-translate-y-full')
        modalCl.remove('scale-150')
    }, 100);
    } else {
    modalCl.add('-translate-y-full')
    setTimeout(() => {
        modalCl.add('opacity-0')
        modalCl.add('scale-150')
    }, 100);
    setTimeout(() => overlayCl.classList.add('hidden'), 300);
    }
    }
    openModal(true)

    

        </script>
    </section>
  </body>
   <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-0000f751-5e9d-4718-aaae-c3151afa7b7d"></div>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>
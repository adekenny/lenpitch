<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>Dashboard | Lense Pitch</title>
  </head>
  <body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
    <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6 text-white bg-red-700"
      >
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto bg-red-700"
        >
          <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-red-700 rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-bars"></i></button
          >
          <a
            class="md:block text-left md:pb-2 mr-0 inline-block whitespace-nowrap text-xl uppercase font-bold p-4 px-0 text-white"
            href="javascript:void(0)"
          >
           {{Auth()->user()->category}}
          </a>
          <ul class="md:hidden items-center flex flex-wrap list-none mt-6">
            <li class="inline-block relative">
              
             
            </li>
            <li class="inline-block relative">
             
              
            </li>
          </ul>
          <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden bg-red-700"
            id="example-collapse-sidebar"
          >
            <div
              class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
            >
              <div class="flex flex-wrap">
                <div class="w-6/12">
                  <a
                    class="md:block text-left text-WHITE md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                    href="javascript:void(0)"
                  >
                  {{Auth()->user()->category}}
                  </a>
                </div>
                <div class="w-6/12 flex justify-end">
                  <button
                    type="button"
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    onclick="toggleNavbar('example-collapse-sidebar')"
                  >
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
              <div class="mb-3 pt-0">
                
              </div>
            </form>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none mt-8">
              <li class="items-center">
                <a
                  class="text-white hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                  href="{{ url('/employer_dashboard') }}"
                  ><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                  Dashboard</a
                >
              </li>
              <li class="items-center">
                <a
                  class="text-blueGray-300 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="{{ url('employer/watch_video') }}"
                  ><i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                  View Jobseekers</a
                >
              </li>
              <li class="items-center">
              <a
                  class="text-blueGray-300 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="{{ url('employer/bookmarks') }}"
                  ><i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                  My Bookmarks</a
                >
              </li>
              <li class="items-center">
              <a
                  class="text-blueGray-300 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="{{ url('employer/view_sentmessages') }}"
                  ><i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                  Sent Messages</a
                >
              </li>
              <li class="items-center">
                &nbsp;
              </li>
              <li class="items-center">
               &nbsp;
              </li>
            </ul>
            
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
            
            </h6>
            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="inline-flex">
                &nbsp;
                
              </li>
              <li class="inline-flex">
                &nbsp;
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      
  <div class="relative md:ml-64 bg-blueGray-50">
    <x-general-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-4">
        <div class="flex justify-between">
        <span class="bg-indigo-700 py-1 px-2 rounded text-white text-sm"><a href="{{ url('employer_bookmark/'.$user->id) }}">Bookmark Profile</a></span>
        <span class="bg-green-500 py-1 px-2 rounded text-white text-sm"><a href="{{ url('employer_compose_message/'.$user->id) }}">Message</a></span>
        </div>
        </h2>
    </x-slot>

    <div class="mx-2">
    <div class="container mx-auto my-5 p-2">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2 shadow-lg rounded-lg">
                <!-- Profile Card -->
                <div class="bg-white p-5 border-t-4 border-red-500">
                    <div class="image overflow-hidden">
                        
                        @if($user->photo)
                      
                       <img src="{{ asset('lenspitch/public/storage/'.$user->photo->photo) }}" class="h-84 w-82 mx-auto rounded-full"/>
                       
                       @endif
                       
                       
                    </div>
                    <h2 class="text-gray-900 font-bold leading-2 my-1 mt-2 text-xl" style="text-transform:uppercase">
                    {{ $user->firstname }}&nbsp;&nbsp; {{ $user->surname }}  </h2>
                   
                    <p class="text-sm text-gray-500 hover:text-gray-500 leading-4">
                                    
                                    @if($user->titlecover)
     
                                    <h1>{{ $user->titlecover->title }}</h1>
                                    <br/>
                                    {{ $user->titlecover->description }}
                                    <br/><br/>
                                    
                                    @endif
                    </p>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                        <span>Status</span>
                            @if($user->status == 'enabled')
                                <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">
                                    Active
                                  </span></span>
                            @elseif($user->status == 'disabled')
                            <span class="ml-auto"><span
                                    class="bg-red-500 py-1 px-2 rounded text-white text-sm">
                                    Disabled
                                  </span></span>
                            @endif


                                    @if($user->verification == 'verified')
                                    <span class="ml-auto"><span
                                    class="bg-blue-500 py-1 px-2 rounded text-white text-sm">                            
                                    verified
                                  </span>
                                  @elseif($user->verification == 'unverified')
                                  <span class="ml-auto"><span
                                    class="bg-orange-500 py-1 px-2 rounded text-white text-sm">                            
                                    Unverified
                                  </span>
                                  @endif

                                </span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Member since</span>
                            <span class="ml-auto">@php

                              $join_date = substr($user->created_at, 0, 10);
                              $join = strtotime($join_date);
                              $formated_date = date("d-m-Y", $join);
                              echo $formated_date;

                            @endphp</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
                
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-auto overflow-hidden">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-lg rounded-lg">
                <div class="flex items-center space-x-2 font-semibold text-black leading-8 mb-3 bg-gray-100 rounded pl-2 py-2">
                                
                                <span class="tracking-wide">BASIC INFORMATION</span>
                </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">First Name</div>
                                <div class="px-4 py-2">{{ $user->firstname }} </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <div class="px-4 py-2">{{ $user->surname }} </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Category</div>
                                <div class="px-4 py-2">{{$user->category }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">
                               {{ $user->phone }}
                            </div>
                            </div>
                            
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:jane@example.com">{{ $user->email }} </a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Gender</div>
                                <div class="px-4 py-2">{{ $user->gender }}</div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">
                       
                    </button>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>
                 <div>

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-lg rounded-lg">

                    <div class="grid grid-cols-2">
                        <div> 
                            <div class="flex items-center space-x-2 font-semibold text-black leading-8 mb-3 bg-gray-100 rounded pl-2 py-2 mr-8">
                                
                                <span class="tracking-wide">EDUCATIONAL QUALIFICATIONS</span>
                            </div>
                                    @if($user->educations)
                                    
                                    @foreach($user->educations as $education)
                                        
                                        <a href="#" style="text-decoration:underline" ><h2 class="text-x font-bold">{{ $education->institution }}</h2></a>
                                        <h3 class='text-sm font-medium'>{{ $education->qualification }}&nbsp;&nbsp;{{ $education->study_field }}</h3>
                                        <p class='text-sm font-light text-gray-500'>{{ $education->start_date }} &nbsp; - &nbsp;{{ $education->end_date }}</p>
                                        
                                        <br/><br/>
                                        
                                     @endforeach
                                     
                                     @endif
                                      
                        </div>


                        <div> 
                            <div class="flex items-center space-x-2 font-semibold text-black leading-8 mb-3 bg-gray-100 rounded py-2 pl-2">
                                
                                <span class="tracking-wide">WORK EXPERIENCES</span>
                            </div>
                           
                        @if($user->workexperiences)
                        
                            @foreach($user->workexperiences as $work)
                                  
                                  <a href="#" style="text-decoration:underline" ><h2 class="text-x font-bold">{{ $work->title }}</h2></a>
                                   <h3 class='text-sm font-medium'>{{ $work->company_name }}&nbsp;,&nbsp;{{ $education->study_field }}</h3>
                                   <p class='text-sm font-light text-gray-500'>{{ $work->start_date }}&nbsp; - &nbsp; {{ $work->end_date }}</p>

                                   
                                   <br/><br/>
                                 
                               @endforeach
                               
                        @endif

                        </div>
                        
                    </div>
  <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
                </div>


                <div class="my-4"></div>
                 <div>

                <!-- Uploaded CV and video tab begins -->
                <div class="bg-white p-3 shadow-lg rounded-lg mt-8">

                    <div class="grid grid-cols-2">
                        <div> 
                            <div class="flex items-center space-x-2 font-semibold text-black leading-8 mb-3 bg-gray-100 rounded pl-2 py-2 mr-8">
                                
                                <span class="tracking-wide">MY CV</span>
                            </div>
                                    @if($user->cv)
                            
                                      <p class="text-blue-700 text-sm font-bold py-4"><a href="{{ asset('lenspitch/public/storage/'.$user->cv->cv) }}" target="_blank">View Uploaded CV</a></p>
                                      
                                    @endif
                        </div>


                        <div> 
                            <div class="flex items-center space-x-2 font-semibold text-black leading-8 mb-3 bg-gray-100 rounded py-2 pl-2">
                                
                                <span class="tracking-wide">MY VIDEO</span>
                            </div>
                           
                                @if($user->video)
                                
                                      <p class="text-blue-700 text-sm font-bold py-4"><a href="{{ asset('lenspitch/public/storage/'.$user->video->video) }}" target="_blank">View Uploaded Video</a></p>
                                     
                                @endif
                        </div>
                        
                    </div>
  <!-- End of CV and Video tab -->
                </div>
                <!-- End of profile extension tab -->
                </div>
            
            
        </div>
    </div>
    
  </div>
  
  <div>
  <a href="{{ route('employer.viewprofiles') }}"><button class="py-3 px-3 my-4 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm"><< Back to all profiles</button></a>
</div>
  
</x-general-layout>

    </div> 
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
     
    </script>
  </body>
</html>

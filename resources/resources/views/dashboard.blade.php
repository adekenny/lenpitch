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
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-red-700 flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6 text-white"
      >
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
          <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-bars"></i></button
          >
          <a
            class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-xl uppercase font-bold p-4 px-0 text-white"
            href="javascript:void(0)"
          >
            JOB SEEKER
          </a>
          <ul class="md:hidden items-center flex flex-wrap list-none mt-6">
            <li class="inline-block relative">
              <a
                class="text-blueGray-500 block py-1 px-3"
                href="#pablo"
                onclick="openDropdown(event,'notification-dropdown')"
                ><i class="fas fa-bell"></i
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;"
                id="notification-dropdown"
              >
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Another action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Something else here</a
                >
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Seprated link</a
                >
              </div>
            </li>
            <li class="inline-block relative">
              <a
                class="text-blueGray-500 block"
                href="#pablo"
                onclick="openDropdown(event,'user-responsive-dropdown')"
                ><div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                    ><img
                      alt="..."
                      class="w-full rounded-full align-middle border-none shadow-lg"
                      src="./assets/img/team-1-800x800.jpg"
                  /></span></div
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;"
                id="user-responsive-dropdown"
              >
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Another action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Something else here</a
                >
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Seprated link</a
                >
              </div>
            </li>
          </ul>
          <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
          >
            <div
              class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
            >
              <div class="flex flex-wrap">
                <div class="w-6/12">
                  <a
                    class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                    href="javascript:void(0)"
                  >
                    Tailwind Starter Kit
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
                <input
                  type="text"
                  placeholder="Search"
                  class="border-0 px-3 py-2 h-12 border border-solid  border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                />
              </div>
            </form>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none mt-8">
              <li class="items-center">
                <a
                  class="text-pink-500 hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                  href="#/dashboard"
                  ><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                  Dashboard</a
                >
              </li>
              <li class="items-center">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="#/landing"
                  ><i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                  Landing Page</a
                >
              </li>
              <li class="items-center">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="#/profile"
                  ><i class="fas fa-user-circle text-blueGray-400 mr-2 text-sm"></i>
                  Profile Page</a
                >
              </li>
              <li class="items-center">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="#/login"
                  ><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                  Login</a
                >
              </li>
              <li class="items-center">
                <a
                  class="text-blueGray-300 text-xs uppercase py-3 font-bold block"
                  href="#pablo"
                  ><i
                    class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"
                  ></i>
                  Register (soon)</a
                >
              </li>
              <li class="items-center">
                <a
                  class="text-blueGray-300 text-xs uppercase py-3 font-bold block"
                  href="#pablo"
                  ><i class="fas fa-tools text-blueGray-300 mr-2 text-sm"></i>
                  Settings (soon)</a
                >
              </li>
            </ul>
            <hr class="my-4 md:min-w-full" />
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              Documentation
            </h6>
            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="inline-flex">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#/documentation/styles"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i>
                  Styles</a
                >
              </li>
              <li class="inline-flex">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#/documentation/alerts"
                  ><i class="fab fa-css3-alt mr-2 text-blueGray-400 text-base"></i>
                  CSS Components</a
                >
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    <div class="relative md:ml-64 bg-blueGray-50">
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-4">
            {{ __('Dashboard') }}
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
                        @php
                        if(Auth::user()->photo){
                        
                        @endphp
                        <a href="{{ url('photo/create') }}"> <img src="storage/{{Auth()->user()->photo->photo}}" class="h-84 w-82 mx-auto rounded-full"/></a>
                        <div class="pt-2 pb-2 text-gray-600 text-xs leading-6"><a href="{{ url('photo/create') }}"><img src="images/upload.png" width="30" height="20" style="float:left; padding-right:5px">replace profile photo</a></div>
                        @php
                        }
                        else
                        {
                        @endphp 
                        <a href="{{ url('photo/create') }}"><img class="h-84 w-82 mx-auto"
                            src="images/photo.jpg" width="230" height="230"
                            alt=""></a>
                        <div class="pt-2 pb-2 text-gray-600 text-xs leading-6"><a href="{{ url('photo/create') }}"><img class="rounded-full" src="images/upload.png" width="30" height="20" style="float:left; padding-right:5px" >Upload profile photo</a></div>
                        @php
                        }
                        @endphp
                    </div>
                    <h2 class="text-gray-900 font-bold leading-2 my-1 mt-2 text-xl" style="text-transform:uppercase">
                    {{ Auth()->user()->firstname }}&nbsp;&nbsp; {{ Auth::user()->surname }}  </h2>
                   
                    <p class="text-sm text-gray-500 hover:text-gray-500 leading-4">

                        @if(Auth()->user()->titlecover)
     
                                    <h1 style='font-weight:bold; font-size:1.2em; color:gray'>{{Auth()->user()->titlecover->title}}</h1>
                                    <br/>
                                    <span class='text-sm text-gray-500'>{{ Auth()->user()->titlecover->description }}</span>
                                    <br/><br/>
                                    <a href="{{ url('titlecover/'.Auth()->user()->titlecover->id.'/edit') }}"><button class="p-1 transition-colors duration-700 transform hover:bg-blue-400 text-gray-500 rounded focus:border-4 border-indigo-300 text-xs bg-gray-300">Edit</button></a>
                        @else     

                        <a href="{{ route('titlecover.create') }}"><button class="py-3 px-3 my-4 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">Add job title and profession summary</button></a>

                       @endif
                    </p>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Member since</span>
                            <span class="ml-auto">Nov 07, 2016</span>
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
                                <div class="px-4 py-2">{{ Auth()->user()->firstname }} </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <div class="px-4 py-2">{{ Auth::user()->surname }} </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Category</div>
                                <div class="px-4 py-2">{{ Auth::user()->category }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">
                               {{ Auth::user()->phone }}
                            </div>
                            </div>
                            
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:jane@example.com">{{ Auth::user()->email }} </a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Gender</div>
                                <div class="px-4 py-2">{{ Auth::user()->gender }}</div>
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
                        
                                @if(!(Auth()->user()->educations)){


                                    <a href="{{ url('education/create') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">Add educational qualifications here</button></a>
                                
                                @else

                                      @foreach(Auth()->user()->educations as $education)
                                        
                                        <a href="{{ url('education/'.$education->id) }}" style="text-decoration:underline" ><h2 class="text-x font-bold">{{ $education->institution }}</h2></a>
                                        <h3 class='text-sm font-medium'>{{ $education->qualification }}&nbsp;&nbsp;{{ $education->study_field }}</h3>
                                        <p class='text-sm font-light text-gray-500'>{{ $education->start_date }} &nbsp; - &nbsp;{{ $education->end_date }}</p>
                                        <a href="{{ url('education/'.$education->id.'/edit') }}"><button class="p-1 transition-colors duration-700 transform hover:bg-blue-400 text-gray-500 rounded focus:border-4 border-indigo-300 text-xs bg-gray-300">Edit</button></a>
                                        <br/><br/>
                                        
                                     @endforeach

                                        <a href="{{ url('education/create') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">+ Add</button></a>
                                 @endif



                        </div>


                        <div> 
                            <div class="flex items-center space-x-2 font-semibold text-black leading-8 mb-3 bg-gray-100 rounded py-2 pl-2">
                                
                                <span class="tracking-wide">WORK EXPERIENCES</span>
                            </div>
                           
                                @if((Auth()->user()->workexperiences))
     
                                    @foreach(Auth()->user()->workexperiences as $work)
                                  
                                       <a href="{{ url('workexperience/'.$work->id) }}" style="text-decoration:underline" ><h2 class="text-x font-bold">{{ $work->title }}</h2></a>
                                        <h3 class='text-sm font-medium'>{{ $work->company_name }}&nbsp;,&nbsp;{{ $education->study_field }}</h3>
                                        <p class='text-sm font-light text-gray-500'>{{ $work->start_date }}&nbsp; - &nbsp; {{ $work->end_date }}</p>

                                        <a href="{{ url('workexperience/'.$work->id.'/edit') }}"><button class="p-1 transition-colors duration-700 transform hover:bg-blue-400 text-gray-500 rounded focus:border-4 border-indigo-300 text-xs bg-gray-300">Edit</button></a>
                                        <br/><br/>
                                      
                                    @endforeach
                                   

                                    <a href="{{ url('workexperience/create') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">+ Add</button></a>

                                 @else

                                    <a href="{{ url('workexperience/create') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">Add work experience here</button></a>

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
                            
                            @php  
                                if (!(Auth()->user()->cv)){

                            @endphp

                                    <a href="{{ url('cv/create') }}" ><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">+ Add</button></a>
                            @php
                                 }
                                else{
                                @endphp 


                                      <p class="text-blue-700 text-sm font-bold py-4"><a href="{{ asset('storage/'.Auth()->user()->cv->cv) }}" target="_blank">View Uploaded CV</a></p>
                                      <a href="{{ url('cv/create') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">- Replace </button></a>
                                @php      
                            
                                }
                            @endphp



                        </div>


                        <div> 
                            <div class="flex items-center space-x-2 font-semibold text-black leading-8 mb-3 bg-gray-100 rounded py-2 pl-2">
                                
                                <span class="tracking-wide">MY VIDEO</span>
                            </div>
                            @php  
                                if (!(Auth()->user()->video)){

                            @endphp

                                    <a href="{{ url('video/watch') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">+ Add </button></a>
                            @php
                                 }
                                else{
                                @endphp 


                                      <p class="text-blue-700 text-sm font-bold py-4"><a href="{{ asset('storage/'.Auth()->user()->video->video) }}" target="_blank">View Uploaded Video</a></p>
                                      <a href="{{ url('video/watch') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">- Replace</button></a>
                                @php      
                            
                                }
                            @endphp
                           
                        </div>
                        
                    </div>
  <!-- End of CV and Video tab -->
                </div>
                <!-- End of profile extension tab -->
                </div>
            
            
        </div>
    </div>
</div>
    
</x-app-layout>

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
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-end"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }


      (function() {
        /* Add current date to the footer */
        document.getElementById("javascript-date").innerHTML = new Date().getFullYear();
        /* Chart initialisations */
        /* Line Chart */
        var config = {
          type: "line",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July"
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [65, 78, 66, 44, 56, 67, 75],
                fill: false
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [40, 68, 86, 74, 56, 60, 87]
              }
            ]
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Sales Charts",
              fontColor: "white"
            },
            legend: {
              labels: {
                fontColor: "white"
              },
              align: "end",
              position: "bottom"
            },
            tooltips: {
              mode: "index",
              intersect: false
            },
            hover: {
              mode: "nearest",
              intersect: true
            },
            scales: {
              xAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)"
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Month",
                    fontColor: "white"
                  },
                  gridLines: {
                    display: false,
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(0, 0, 0, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ],
              yAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)"
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                    fontColor: "white"
                  },
                  gridLines: {
                    borderDash: [3],
                    borderDashOffset: [3],
                    drawBorder: false,
                    color: "rgba(255, 255, 255, 0.15)",
                    zeroLineColor: "rgba(33, 37, 41, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ]
            }
          }
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);

        /* Bar Chart */
        config = {
          type: "bar",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July"
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [30, 78, 56, 34, 100, 45, 13],
                fill: false,
                barThickness: 8
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [27, 68, 86, 74, 10, 4, 87],
                barThickness: 8
              }
            ]
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Orders Chart"
            },
            tooltips: {
              mode: "index",
              intersect: false
            },
            hover: {
              mode: "nearest",
              intersect: true
            },
            legend: {
              labels: {
                fontColor: "rgba(0,0,0,.4)"
              },
              align: "end",
              position: "bottom"
            },
            scales: {
              xAxes: [
                {
                  display: false,
                  scaleLabel: {
                    display: true,
                    labelString: "Month"
                  },
                  gridLines: {
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(33, 37, 41, 0.3)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ],
              yAxes: [
                {
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value"
                  },
                  gridLines: {
                    borderDash: [2],
                    drawBorder: false,
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.2)",
                    zeroLineColor: "rgba(33, 37, 41, 0.15)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                  }
                }
              ]
            }
          }
        };
        ctx = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(ctx, config);
      })();
    </script>
  </body>
</html>

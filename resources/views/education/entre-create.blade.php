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
            ENTREPRENEUR
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
                    ENTREPRENEUR
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
                  href=""
                  ><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                  Dashboard</a
                >
              </li>
              <li class="items-center">
                <a
                  class="text-blueGray-300 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="{{ url('/my_messages') }}"
                  ><i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                  Messages</a
                >
              </li>
              <li class="items-center">
                &nbsp;
              </li>
              <li class="items-center">
                &nbsp;
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
                
              </li>
              <li class="inline-flex">
               
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
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
                        <a href="{{ url('photo/create') }}"> <img src="{{ asset('lenspitch/public/storage/'.Auth()->user()->photo->photo) }}" class="h-84 w-82 mx-auto rounded-full"/></a>
                        <div class="pt-2 pb-2 text-gray-600 text-xs leading-6"><a href="{{ url('photo/create') }}"><img src="{{ asset('images/upload.png') }}" width="30" height="20" style="float:left; padding-right:5px">replace profile photo</a></div>
                        @php
                        }
                        else
                        {
                        @endphp 
                        <a href="{{ url('photo/create') }}"><img class="h-84 w-82 mx-auto"
                            src="{{ asset('images/upload.png') }}" width="230" height="230"
                            alt=""></a>
                        <div class="pt-2 pb-2 text-gray-600 text-xs leading-6"><a href="{{ url('photo/create') }}"><img class="rounded-full" src="{{ asset('images/upload.png') }}" width="30" height="20" style="float:left; padding-right:5px" >Upload profile photo</a></div>
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
                                    <span class="ml-auto"><span
                                    class="bg-orange-500 py-1 px-2 rounded text-white text-sm">Unverified</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Member since</span>
                            <span class="ml-auto">@php

                              $join_date = substr(Auth::user()->created_at, 0, 10);
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
                                
                                <span class="tracking-wide">EDUCATIONAL BACKGROUND</span>
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
                                
                            <span class="tracking-wide">MARKET TARGET/POTENTIAL CLIENTS</span>
                            </div>
                           
                                @if((Auth()->user()->workexperiences))
     
                                    @foreach(Auth()->user()->workexperiences as $work)
                                  
                                       <a href="{{ url('workexperience/'.$work->id) }}" style="text-decoration:underline" ><h2 class="text-x font-bold">{{ $work->title }}</h2></a>
                                        <h3 class='text-sm font-medium'>{{ $work->company_name }}&nbsp;,&nbsp;{{ $work->industry }}</h3>
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
                                
                            <span class="tracking-wide">BUSINESS DOCUMENTS</span>
                            </div>
                            
                            @php  
                                if (!(Auth()->user()->cv)){

                            @endphp

                                    <a href="{{ url('cv/create') }}" ><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">+ Add</button></a>
                            @php
                                 }
                                else{
                                @endphp 


                                      <p class="text-blue-700 text-sm font-bold py-4"><a href="{{ asset('lenspitch/public/storage/'.Auth()->user()->cv->cv) }}" target="_blank">View Uploaded CV</a></p>
                                      <a href="{{ url('cv/create') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">- Replace </button></a>
                                @php      
                            
                                }
                            @endphp



                        </div>


                        <div> 
                            <div class="flex items-center space-x-2 font-semibold text-black leading-8 mb-3 bg-gray-100 rounded py-2 pl-2">
                                
                            <span class="tracking-wide">BUSINESS IDEA VIDEO</span>
                            </div>
                            @php  
                                if (!(Auth()->user()->video)){

                            @endphp

                                    <a href="{{ url('video/watch') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">+ Add </button></a>
                            @php
                                 }
                                else{
                                @endphp 


                                      <p class="text-blue-700 text-sm font-bold py-4"><a href="{{ asset('lenspitch/public/storage/'.Auth()->user()->video->video) }}" target="_blank">View Uploaded Video</a></p>
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

  <section class="max-w-4xl mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 pt-1">
    <!-- overlay -->
<div id="modal_overlay" class="absolute inset-0 bg-black bg-opacity-80 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

    <!-- modal -->
<div id="modal" class="opacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-2/3 md:h-auto bg-white rounded shadow-lg transition-opacity transition-transform duration-300">

    <!-- button close -->
    <button 
    onclick="openModal(false)"
     class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
        &cross;
      </button>

    <!-- header -->
    <div class="px-4 py-3 border-b border-gray-200">
   <form  method="POST" action="{{ route('education.store') }}">
        @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1 pb-4">
                <div>
                    <x-label for="institution" :value="__('Institution Name:')" />
                    <x-input id="institution" class="block mt-1 w-full" type="text" name="institution" :value="old('institution')" required autofocus />
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <x-label for="qualification" :value="__('Qualification Obtained:')" />
                    <select name='qualification' style="border-radius:5px; width:50%; font-size:14px; border-color:#cccccc; margin-right:5px" required>
    <option value=''>select</option>
    <option value='SSCE'>Secondary Certificate (SSCE)</option>
    <option value='Certification'>Professional Certification</option>
    <option value='ND'>National Diploma (ND)</option>
    <option value='HND'>Higher National Diploma (HND)</option>
    <option value='AD'>Associate Degree (AD)</option>
    <option value='B.Sc'>Bachelor of Science (B.Sc)</option>
    <option value='B.A'>Bachelor of Art (B.A)</option>
    <option value='B.Edu'>Bachelor of Education (B.Edu)</option>
    <option value='B.A.S'>Bachelor of Applied Science (B.A.S)</option>
    <option value='B.Eng'>Bachelor of Engineering (B.Eng)</option>
    <option value='B.B.A'>Bachelor of Business Admin. (B.B.A)</option>
    <option value='L.L.B'>Bachelor of Laws (L.L.B)</option>
    <option value='Pg.D'>Post-graduate Diploma (Pg.D)</option>
    <option value='Master Degree'>Master's Degree</option>
    <option value='PhD'>Doctorate Degree (PhD)</option>
    
    </select> 
                </div>

                <div>
                    <x-label for="study_field" :value="__('Field of Study:')" />

                   <x-input id="study_field" class="block mt-1 w-full" type="text" name="study_field" :value="old('study_field')" required autofocus/>
               
                  </div>

                <div>
                    <x-label for="start_date" :value="__('Start Date:')" />
                   <div class="flex justify-between">
                   <select name='start_day' style="border-radius:5px; width:50%; font-size:14px; border-color:#cccccc; margin-right:5px" required>
    <option value=''>day</option>
    <option value='1st'>1</option>
    <option value='2nd'>2</option>
    <option value='3rd'>3</option>
    <option value='4th'>4</option>
    <option value='5th'>5</option>
    <option value='6th'>6</option>
    <option value='7th'>7</option>
    <option value='8th'>8</option>
    <option value='9th'>9</option>
    <option value='10th'>10</option>
    <option value='11th'>11</option>
    <option value='12th'>12</option>
    <option value='13th'>13</option>
    <option value='14th'>14</option>
    <option value='15th'>15</option>
    <option value='16th'>16</option>
    <option value='17th'>17</option>
    <option value='18th'>18</option>
    <option value='19th'>19</option>
    <option value='20th'>20</option>
    <option value='21st'>21</option>
    <option value='22nd'>22</option>
    <option value='23rd'>23</option>
    <option value='24th'>24</option>
    <option value='25th'>25</option>
    <option value='26th'>26</option>
    <option value='27th'>27</option>
    <option value='28th'>28</option>
    <option value='29th'>29</option>
    <option value='30th'>30</option>
    <option value='31st'>31</option>
    </select> 

    <select name='start_month' style="border-radius:5px; width:50%; font-size:14px; border-color:#cccccc; margin-right:5px" required>
    <option value=''>month</option>
    <option value='January'>Janaury</option>
    <option value='February'>February</option>
    <option value='March'>March</option>
    <option value='April'>April</option>
    <option value='May'>May</option>
    <option value='June'>June</option>
    <option value='July'>July</option>
    <option value='August'>August</option>
    <option value='September'>September</option>
    <option value='October'>October</option>
    <option value='November'>November</option>
    <option value='December'>December</option>
    </select> 

    <select name='start_year' style="border-radius:5px; width:50%; font-size:14px; border-color:#cccccc; margin-right:5px" required>
    <option value=''>year</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950">1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    </select> 
                    </div>
                </div>

                <div>
                <x-label for="end_date" :value="__('End Date:')" />

                <div class="flex justify-between">
                   <select name='end_day' style="border-radius:5px; width:50%; font-size:14px; border-color:#cccccc; margin-right:5px" required>
    <option value=''>day</option>
    <option value='1st'>1</option>
    <option value='2nd'>2</option>
    <option value='3rd'>3</option>
    <option value='4th'>4</option>
    <option value='5th'>5</option>
    <option value='6th'>6</option>
    <option value='7th'>7</option>
    <option value='8th'>8</option>
    <option value='9th'>9</option>
    <option value='10th'>10</option>
    <option value='11th'>11</option>
    <option value='12th'>12</option>
    <option value='13th'>13</option>
    <option value='14th'>14</option>
    <option value='15th'>15</option>
    <option value='16th'>16</option>
    <option value='17th'>17</option>
    <option value='18th'>18</option>
    <option value='19th'>19</option>
    <option value='20th'>20</option>
    <option value='21st'>21</option>
    <option value='22nd'>22</option>
    <option value='23rd'>23</option>
    <option value='24th'>24</option>
    <option value='25th'>25</option>
    <option value='26th'>26</option>
    <option value='27th'>27</option>
    <option value='28th'>28</option>
    <option value='29th'>29</option>
    <option value='30th'>30</option>
    <option value='31st'>31</option>
    </select> 

    <select name='end_month' style="border-radius:5px; width:50%; font-size:14px; border-color:#cccccc; margin-right:5px" required>
    <option value=''>month</option>
    <option value='January'>Janaury</option>
    <option value='February'>February</option>
    <option value='March'>March</option>
    <option value='April'>April</option>
    <option value='May'>May</option>
    <option value='June'>June</option>
    <option value='July'>July</option>
    <option value='August'>August</option>
    <option value='September'>September</option>
    <option value='October'>October</option>
    <option value='November'>November</option>
    <option value='December'>December</option>
    </select> 

    <select name='end_year' style="border-radius:5px; width:50%; font-size:14px; border-color:#cccccc; margin-right:5px" required>
    <option value=''>year</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950">1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    </select> 
                    </div>
                
              </div>

                <div>
                <x-label for="grade" :value="__('Grade:')" />
                    <x-input id="grade" class="block mt-1 w-full" type="text" name="grade" :value="old('grade')" required autofocus />
                </div>
                
            </div>
                <br/>                
            <div class="flex justify-between mt-6">
               
               <button name="save_add" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
           </div>

            
        </form>
    
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
      
    </script>
  </body>
</html>

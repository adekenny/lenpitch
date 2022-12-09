<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mx-20">
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-5 border-t-4 border-red-500">
                    <div class="image overflow-hidden">
                        @php
                        if(Auth::user()->photo){
                        
                        @endphp
                        <a href="{{ url('photo/create') }}"> <img src="{{ asset('storage/'.Auth()->user()->photo->photo) }}" class="h-84 w-82 mx-auto"/></a>
                        <div class="pt-2 pb-2 text-gray-600 text-xs leading-6"><a href="{{ url('photo/create') }}"><img src="{{ asset('images/upload.png') }}" width="30" height="20" style="float:left; padding-right:5px">replace profile photo</a></div>
                        @php
                        }
                        else
                        {
                        @endphp 
                        <a href="{{ url('photo/create') }}"><img class="h-84 w-82 mx-auto"
                            src="{{ asset('images/photo.jpg') }}"
                            alt=""></a>
                        <div class="pt-2 pb-2 text-gray-600 text-xs leading-6"><a href="{{ url('photo/create') }}"><img src="{{ asset('images/upload.png') }}" width="30" height="20" style="float:left; padding-right:5px">Upload profile photo</a></div>
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

                        <a href="{{ route('titlecover.create') }}"><button class="py-3 px-3 my-4 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">Add job title and profession summary here</button></a>

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
                <div class="bg-white p-3 shadow-sm rounded-sm">
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
                                <div class="px-4 py-2 font-semibold">Gender</div>
                                <div class="px-4 py-2">Female</div>
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
                                <div class="px-4 py-2 font-semibold">Birthday</div>
                                <div class="px-4 py-2">Feb 06, 1998</div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Add more
                        Information
                    </button>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>
                 <div>

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-sm rounded-sm">

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
                <div class="bg-white p-3 shadow-sm rounded-sm">

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

                                    <a href="{{ url('video/create') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">+ Add </button></a>
                            @php
                                 }
                                else{
                                @endphp 


                                      <p class="text-blue-700 text-sm font-bold py-4"><a href="{{ asset('storage/'.Auth()->user()->video->video) }}" target="_blank">View Uploaded Video</a></p>
                                      <a href="{{ url('video/create') }}"><button class="p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">- Replace</button></a>
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
    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
<!-- overlay -->
<div id="modal_overlay" class="hidden absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

<!-- modal -->
<div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-1/2 md:h-3/4 bg-white rounded shadow-lg duration-300">

    <!-- button close -->
    <button 
    onclick="openModal(false)"
    class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
    &cross;
    </button>

    <!-- header -->
    <div class="px-4 py-3 border-b border-gray-200 h-auto">
        <h2 class="text-2xl">Educational Details</h2>  
    </div>
    <div class="grid grid-cols-2 gap-8 px-4 py-4">
            <div class="text-lg col-span-2"><b>Institution</b>: {{ $education->institution}}</div>
            <div class="text-lg"><b>Qualification Obtained</b>: {{ $education->qualification}}</div><div class="text-lg"><b>Field of Study</b>: {{$education->study_field}}</div>
            <div class="text-lg"><b>Start Date</b>: {{ $education->start_date}}</div><div class="text-lg"><b>End Date</b>: {{$education->end_date}}</div>
            <div class="text-lg"><b>Grade</b>: {{ $education->grade}}</div>
            
    </div>
    <br/><br/>
    <div class="flex justify-between px-6">
    <div>  <a href="{{ url('education/'.$education->id.'/edit') }}"><button name="update" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Edit</button></a></div>
    <div><form method="post" action="{{route('education.destroy',$education->id)}}">
                            @method('delete')
                            @csrf<button name="delete" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Delete</button></form>  </div>
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

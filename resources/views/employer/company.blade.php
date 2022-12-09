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

<a href="{{ route('titlecover.create') }}"><button class="py-3 px-3 my-4 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">Brief description of company or business</button></a>

@endif
                    </p>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                        <span>Status</span>
                            @if(Auth::user()->status == 'enabled')
                                <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">
                                    Active
                                  </span></span>
                            @elseif(Auth::user()->status == 'disabled')
                            <span class="ml-auto"><span
                                    class="bg-red-500 py-1 px-2 rounded text-white text-sm">
                                    Disabled
                                  </span></span>
                            @endif


                                    @if(Auth::user()->verification == 'verified')
                                    <span class="ml-auto"><span
                                    class="bg-blue-500 py-1 px-2 rounded text-white text-sm">                            
                                    verified
                                  </span>
                                  @elseif(Auth::user()->verification == 'unverified')
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
                    @if(Auth::user()->employer)
                    <div class="flex items-center space-x-2 font-semibold text-black leading-8 mb-3 bg-gray-100 rounded pl-2 py-2 mt-7">
                                
                                <span class="tracking-wide">COMPANY INFORMATION</span>
                    </div>

                    <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-1">
                                <div class="px-4 py-2 font-semibold">Company Name:</div>
                                <div class="px-4 py-2">{{ Auth()->user()->employer->company }} </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="px-4 py-2 font-semibold">Address:</div>
                                <div class="px-4 py-2">{{ Auth::user()->employer->address }} </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="px-4 py-2 font-semibold">Industry:</div>
                                <div class="px-4 py-2">{{ Auth::user()->employer->industry }}</div>
                            </div>
                            
                    </div>
                    <div class="grid grid-cols-1">
                            <a href="{{ url('employer/'.Auth()->user()->employer->id.'/edit') }}"><button class="p-1 transition-colors duration-700 transform hover:bg-blue-400 text-gray-500 rounded focus:border-4 border-indigo-300 text-xs bg-gray-300 my-4">Edit</button></a>
                            </div>
                    @else

                    <a href="{{ url('/employer/create') }}"><button class="mt-6 mb-2 p-2 pl-3 pr-5 transition-colors duration-700 transform bg-gray-500 hover:bg-blue-400 text-gray-100 rounded-lg focus:border-4 border-indigo-300 text-sm">+ Add Company Information</button></a>

                    @endif
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>
                 <div>

                
                </div>
                <!-- End of profile tab -->
                </div>


                <div class="my-4"></div>
                 <div>

               
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
<div id="modal" class="opacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-3/4 md:h-auto bg-white rounded shadow-lg transition-opacity transition-transform duration-300 p-6">

    <!-- button close -->
    <button 
    onclick="openModal(false)"
     class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
        &cross;
      </button>

    <!-- header -->
    
    <div class="px-4 py-3 h-auto">
        <h2 class="text-xl">Please add company information to complete your employer's profile information</h2>
        <br/>
    <form  method="POST" action="{{ route('employer.company_info_store') }}">
        @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1 pb-2">
                <div>
                    <x-label for="company" :value="__('Company Name:')" />
                    <x-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" style="border-left:1px red solid" required autofocus />
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1 pb-2" >
                <div>
                    <x-label for="address" :value="__('Address:')" />
                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" style="border-left:1px red solid" required autofocus />
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1 pb-2">
                <div>
                <select name="state" style="border-left:1px red solid; border-radius:5px; width:100%; font-size:14px;" id="state" required>
                                    <option selected>Select State</option>
                                    <option value="Not Applicable">Not Applicable</option>
                                    <option value="Abuja">Abuja</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nassarawa">Nassarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                            </select>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1 pb-2">
                <div>
                <select name="country" style="border-left:1px red solid; border-radius:5px; width:100%; font-size:14px;" id="country" required>
                                    <option selected>Select Country</option>
                                    <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                </div>
            </div>


            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1 pb-2">
                <div>
                <select name="industry" style="border-left:1px red solid; border-radius:5px; width:100%; font-size:14px;" id="industry" required>
                                    <option selected>Select Industry</option>
                                    <option value="Advertising & Media">Advertising & Media</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Automotive & Aviation">Automotive & Aviation</option>
                                    <option value="Banking, Finance & Insurance">Banking, Finance & Insurance</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Education">Education</option>
                                    <option value="Energy & Utilities">Energy & Utilities</option>
                                    <option value="Entertainment & Events">Entertainment & Events</option>
                                    <option value="Consumer goods">Consumer goods</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Hospitality & Hotels">Hospitality & Hotels</option>
                                    <option value="Industrial goods">Industrial goods</option>
                                    <option value="Information/Communication Technology">Information/Communication Technology</option>
                                    <option value="Law & Compliance">Law & Compliance</option>
                                    <option value="Oil & gas">Oil & gas</option>
                                    <option value="Manufacturing & Warehousing">Manufacturing & Warehousing</option>
                                    <option value="NGO & Charity">NGO & Charity</option>
                                    <option value="Recruitment">Recruitment</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Retail & Fashion">Retail & Fashion</option>
                                    <option value="Shipping & Logistics">Shipping & Logistics</option>
                                    <option value="Tourism & Travel">Tourism & Travel</option>
                                    <option value="Transportation">Transportation</option>
                            </select>
                </div>
            </div>

            
                <br/>                
            <div class="flex justify-between mt-6">
               
               <button name="save_add" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
           </div>

            
        </form>
        <br/><br/>
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

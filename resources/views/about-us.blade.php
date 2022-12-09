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
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="{{url('/')}}"><img src="images/logo.png" width="80" height="80" /></a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button"
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
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("images/header_img_newest.jpg");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h3 class="text-white font-semibold text-5xl mt-18">
                                Your career success story starts here
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px;">

            </div>
        </div>
        

        
      <!-- search engine here -->


    


    </main>
    <footer class="relative bg-gray-300 py-12">

    <section class="md:w-6/12; my-auto mx-10 bg-white p-4 rounded-md">
    <h3 class="text-3xl mx-5 my-8">About Us</h3>
    <br/>
    <p class="text-md m-5">Connect with job seekers, employers, and investors, and build your brand in such a way that you will be asked to pitch.</p>
    <p class="text-md m-5">Share and grow your abilities with this global village.</p>
    <p class="text-md m-5">We provide a safe and supportive atmosphere in which you can achieve your goals.</p>
    <p class="text-md m-5">Allow job searchers and businesses the freedom to develop their world at their own speed.</p>
    <p class="text-md m-5">Market yourself in a dynamic way like never. </p>
</section>
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
                        <a href="https://www.facebook.com/profile.php?id=100075706996813" target="_blank"><img src="{{ asset('images/facebook.png') }}" class="w-10 h-10 mr-2"/></a>
                        <a href="https://twitter.com/LENSPITCHS" target="_blank"><img src="{{ asset('images/twittter.png') }}" class="w-10 h-10 mr-2"/></a>
                        <a href="https://www.instagram.com/lenspitchs/" target="_blank"><img src="{{ asset('images/instagram.png') }}" class="w-10 h-10"/></a>
                    </div>
                    
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-white text-sm font-semibold mb-2"><a href="{{ url('/aboutus') }}">About Us</a></span
                >
                <ul class="list-unstyled">
                  <li>
                   &nbsp;
                  </li>
                  <li class="mb-4">
                    <a
                      class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="{{ url('/privacy_policy') }}"
                      >Privacy Policy</a
                    >
                  </li>
                  <li class="mb-4">
                    <a
                      class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="{{ url('/terms_conditions') }}"
                      >Terms and Conditions</a
                    >
                  </li>
                  <li>
                    &nbsp;
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
            <div class="text-sm text-white font-semibold py-1">
              © 2021 The Jobshow International
              
            </div>
          </div>
        </div>
      </div>
    </footer>
   
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
  <!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=16771271;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline();</script>
</html>
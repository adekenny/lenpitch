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
    <title>Dashboard | Tailwind Starter Kit by Creative Tim</title>

    
  </head>
  <body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-gray-200 flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
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
            class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="javascript:void(0)"
          >
            Administration
          </a>
          <ul class="md:hidden items-center flex flex-wrap list-none">
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
                      src=""
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
                    Administration
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
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
              <li class="items-center">
                <a
                  class="text-pink-500 hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                  href="{{ url('/admin_dashboard') }}"
                  ><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                  Dashboard</a
                >
              </li>
              <li class="items-center">
              <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="{{ route('admin.uploadVideo') }}"
                  ><i class="fas fa-user-circle text-blueGray-400 mr-2 text-sm"></i>
                  Upload Advert Videos</a
                >
              </li>
              <li class="items-center">
              <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="{{ route('admin.viewStatus') }}"
                  ><i class="fas fa-user-circle text-blueGray-400 mr-2 text-sm"></i>
                  View accounts status</a
                >
              </li>

              <li class="items-center">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                  href="{{ route('admin.implementVerification') }}"
                  ><i class="fas fa-user-circle text-blueGray-400 mr-2 text-sm"></i>
                  Verify Users</a
                >
              </li>
              <li class="items-center">
                &nbsp;&nbsp;
              </li>
              </li>
              <li class="items-center">
                &nbsp;&nbsp;
              </li>
              </li>
              <li class="items-center">
                &nbsp;&nbsp;
              </li>
              <li class="items-center">
              <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
              </li>
              
            </ul>
            <hr class="my-4 md:min-w-full" />
           
          </div>
        </div>
      </nav>
      <div class="relative md:ml-64 bg-blueGray-50">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
          >
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href="/admin_dashboard"
              >Dashboard</a
            >
            <form
              class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3"
            >
              <div class="relative flex w-full flex-wrap items-stretch text-white">
               
               Current User : {{ Auth()->user()->firstname }}&nbsp;{{Auth()->user()->surname}}
              </div>
            </form>
            <ul
              class="flex-col md:flex-row list-none items-center hidden md:flex"
            >
              <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                <div class="items-center flex">
                  
                </div>
              </a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;"
                id="user-dropdown"
              >
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Another action</a
                >
              </div>
            </ul>
          </div>
        </nav>
        <!-- Header -->
        <div class="relative bg-pink-600 md:pt-22 pb-32 pt-12 bg-red-600">
        
        </div>
        
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
       
          <div class="flex flex-wrap">
          
            <div class="w-full xl:w-12/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-3 shadow-lg rounded"
              >
                
                <div class="p-2 flex-auto">
                  <!-- Chart -->
                 @if($users)
                 <table class="bg-white text-gray-900 border-separate w-full shadow-none">
                 <thead>
		               <tr>
			                <th class="bg-pink-700 text-white p-2 w-2">sn</th>
		                	<th class="bg-pink-700 text-white p-2">firstname</th>
			                <th class="bg-pink-700 text-white p-2">surname</th>
			                <th class="bg-pink-700 text-white p-2 w-auto">phone</th>
		                  <th class="bg-pink-700 text-white p-2 w-auto">email</th>
                      <th class="bg-pink-700 text-white p-2 w-auto">gender</th>
                      <th class="bg-pink-700 text-white p-2 w-auto">category</th>
                      <th class="bg-pink-700 text-white p-2 w-auto">Status</th>
                      <th class="bg-pink-700 text-white p-2 w-auto">Verification</th>
	            	</tr>
                	</thead>
                  <tbody>
                  @php $x = 1; @endphp 

                    @foreach($users as $user)
                    
		                  <tr class="bg-white text-blue-900">
			                <td class="p-1 text-sm">@php echo $x; @endphp</td>
			                <td class="p-1 text-sm">{{ $user->firstname }}</td>
			                <td class="p-1 text-sm">{{ $user->surname }}</td>
		                	<td class="p-1 text-sm">{{ $user->phone }}</td>
			                <td class="p-1 text-sm">{{ $user->email }}</td>
                      <td class="p-1 text-sm">{{ $user->gender }}</td>
                      <td class="p-1 text-sm">{{ $user->category }}</td>
                      <td class="p-1 text-sm">
                        {{ $user->status }}
                        </td>
                      <td class="p-1 text-sm">
                      @if($user->verification === 'verified')
                          <span class="text-blue-600 font-bold">{{ $user->verification }}</span>
                          @else
                          <span class="text-red-600 font-bold">{{ $user->verification }}</span>
                          @endif
                        </td>
                      <td class="p-1 text-sm"> 
                          @if($user->verification === 'verified')
                             <a href="{{ url('admin/'.$user->id.'/unverify_user') }}"><button class="px-4 py-1 hover:bg-blue-400 text-white rounded-full focus:border-4 border-indigo-300 bg-red-400 text-sm leading-3">unverify</button>
                          @endif
                          @if($user->verification === 'unverified')
                             <a href="{{ url('admin/'.$user->id.'/verify_user') }}"><button class="px-4 py-1 text-white rounded-full focus:border-4 border-indigo-300 bg-blue-600 text-sm leading-3">verify</button>
                          @endif
                    </td>
	                  	</tr>
                      @php $x++; @endphp 
                            
                     
                    @endforeach
                    		
	</tbody>
</table>

                 @else

                  <p>No user to display at the moment</p>
                 @endif
                </div>
              </div>
            </div>
          </div>
         
          <footer class="block py-4">
            <div class="container mx-auto px-4">
              <hr class="mb-4 border-b-1 border-blueGray-200" />
              <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4">
                  <div class="text-sm text-blueGray-500 font-semibold py-1">
                   
                   
                    
                  </div>
                </div>
                <div class="w-full md:w-8/12 px-4">
                  <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                    <li>
                     
                     
                    </li>
                    <li>
                      
                    </li>
                    <li>
                      <a
                        href="http://blog.creative-tim.com"
                        class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                      >
                        
                      </a>
                    </li>
                    <li>
                      
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        </div>
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

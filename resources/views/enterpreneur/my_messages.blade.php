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

    <div class="relative md:ml-64 bg-blueGray-50">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-4">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mx-2">
    <div class="container mx-auto my-5 p-2">
    @if($messages)
                 <table class="text-gray-900 border-separate w-full shadow-none bg-transparent">
                 <thead>
		               <tr>
			                <th class="bg-pink-700 text-white p-2 w-2">sn</th>
                            <th class="bg-pink-700 text-white text-left pl-2">sender</th>
		                	<th class="bg-pink-700 text-white text-left pl-2">firstname</th>
			                <th class="bg-pink-700 text-white text-left pl-2">surname</th>
			                <th class="bg-pink-700 text-white text-left pl-2">Title</th>
		                  <th class="bg-pink-700 text-white text-left pl-2">Message</th>
                      
                      <th class="bg-pink-700 text-white text-left pl-2">&nbsp;</th>
                      <th class="bg-pink-700 text-white text-left pl-2">&nbsp;</th>
	            	</tr>
                	</thead>
                  <tbody class="bg-transparent">
                  @php $x = 1; @endphp 

                    @foreach($messages as $user)
                    
		                  <tr class="bg-transparent text-blue-900">
			                <td class="p-1 text-sm">@php echo $x; @endphp</td>
                            <td class="p-1 text-sm text-blue-800"><a href="{{ url('message_sender_profile/'.$user->user_id) }}">View details</a></td>
			                <td class="p-1 text-sm">{{ $user->firstname }}</td>
			                <td class="p-1 text-sm">{{ $user->surname }}</td>
		                	<td class="p-1 text-sm">{{ $user->title }}</td>
			                <td class="p-1 text-sm">{{ $user->message }}</td>
                      
                      
                      <td class="p-1 text-sm"> <a href="{{ url('jobseeker_delete_message/'.$user->id) }}"><button class="px-4 py-1 hover:bg-blue-400 text-white rounded-full focus:border-4 border-indigo-300 bg-red-600 text-sm leading-3">delete message</button></td>
	                  	</tr>
                      @php $x++; @endphp 
                            
                     
                    @endforeach
                    		
	</tbody>
</table>

                 @else

                  <p>No message to display at the moment</p>
                 @endif
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
     
    </script>
  </body>
</html>

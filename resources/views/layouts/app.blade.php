<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script>
        var open = false

        function openq() {
            if (open) {
                document.getElementById('menu').classList.add("hidden")
                open = false
            } else {
                document.getElementById('menu').classList.remove("hidden")
                open = true
            }
        }
    </script>
</head>

<body class="overflow-x-hidden">
    <div>

    </div>
    <nav class=" border-gray-200 bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">

                <h1 class=" font-bold tracking-tight text-[hsl(218,81%,95%)]">MUSI <br>HOST</span>
                </h1>
            </a>
            <button onclick="openq()" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 hover:bg-gray-700 focus:ring-gray-600">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div id='menu' class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium  flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white bg-gray-800 md:dark:bg-gray-900 border-gray-700">
                    <li>
                        <a href="{{route('home')}}"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-white md:dark:hover:text-blue-500 hover:bg-gray-700 hover:text-white md:dark:hover:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-white md:dark:hover:text-blue-500 hover:bg-gray-700 hover:text-white md:dark:hover:bg-transparent">Trending</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-white md:dark:hover:text-blue-500 hover:bg-gray-700 hover:text-white md:dark:hover:bg-transparent">Latest songs</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-white md:dark:hover:text-blue-500 hover:bg-gray-700 hover:text-white md:dark:hover:bg-transparent"> All songs</a>
                    </li>
                    <li>
                        @guest
                            <form action="{{route('loginPage')}}" method="get">
                                <button href="javascript:void(0)"
                                    class="bg-primary border-primary border rounded-full inline-flex items-center justify-center py-2 px-3 text-center text-base font-medium text-white hover:bg-[#1B44C8] hover:border-[#1B44C8]">
                                    Log in
                                </button>

                            </form>

                        @endguest
                        @auth



<button onclick="dropdowButton()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center " type="button">
    {{Auth::user()->name}}
    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
    </button>

    <!-- Dropdown menu -->
    <script>
        var drop=false;
        function dropdowButton(){
            if(drop){
                document.getElementById("dropdow").classList.add('hidden')
                drop=false
            }else{
                document.getElementById("dropdow").classList.remove('hidden')
                drop=true
            }
        }
    </script>


    <div id="dropdow" class=" z-10 absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
        <ul class="py-2 text-sm text-gray-700 " >
          <li>
            <a href="{{route('show',Auth::user()->id)}}" class="block px-4 py-2 hover:bg-gray-100 ">My account</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">My favorite</a>
          </li>
          <li>
            <a href="{{route('edit',Auth::user()->id)}}" class="block px-4 py-2 hover:bg-gray-100 ">Settings</a>
          </li>
          <li>
            <a href="{{route('logout')}}" class=" text-red-600 block px-4 py-2 hover:bg-gray-100 ">Sign out</a>
          </li>
        </ul>
    </div>



                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>

        @yield('content')
        @yield('login')
        @yield('signup')
        @yield('myAcc')
        @yield('editAcc')

    </div>
    @yield('footer')

</body>

</html>

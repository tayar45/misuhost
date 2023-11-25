@extends('layouts.app')

@section('myAcc')
    <!-- component -->
    {{--  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">  --}}

    <section class="py-5 bg-gray-200">
        <div class="w-full lg:w-5/12 px-4 mx-auto">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
                <div class="px-6">
                    <h3 class="text-center mt-8 mb-4 text-xl font-semibold leading-normal mb-2 text-blueGray-700">
                        {{ Auth::user()->name }}
                    </h3>
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4 flex justify-center">

                            <div class="relative">

                                <div class="relative overflow-hidden rounded-lg mt-5">
                                    <img src="{{ isset(Auth::user()->profil) ? '/storage/profiles/' . Auth::user()->profil : 'images/profil.jpg' }}"
                                        alt="image" style="object-fit: cover;" class="w-full w-32 h-32 md:w-48 md:h-48 lg:w-64 lg:h-64 xl:w-96 xl:h-96" />
                                </div>

                            </div>
                        </div>
                        <div class="w-full px-4 text-center mt-5">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                <div class="mr-4 p-3 text-center">
                                    <span
                                        class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">22</span>
                                    <span class="text-sm text-blueGray-400">Views</span>
                                </div>
                                <div class="mr-4 p-3 text-center">
                                    <span
                                        class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">10</span>
                                    <span class="text-sm text-blueGray-400">Soungs</span>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>







        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
            <h1 class="mt-10 mb-8 text-3xl font-bold tracking-tight text-[hsl(0,0%,0%)] md:text-4xl xl:text-5xl uppercase">
                Soungs list</h1>


            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">

                <div class="rounded overflow-hidden shadow-lg">

                    <a href="#"></a>
                    <div class="relative">
                        <a href="#">
                            <img class="w-full"
                                src="https://images.pexels.com/photos/196667/pexels-photo-196667.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>



                    </div>
                    <div class="px-6 py-4">

                        <a href="#"
                            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">Best
                            View in Newyork City</a>

                    </div>


                </div>
                <div class="rounded overflow-hidden shadow-lg">

                    <a href="#"></a>
                    <div class="relative">
                        <a href="#">
                            <img class="w-full"
                                src="https://images.pexels.com/photos/196667/pexels-photo-196667.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>



                    </div>
                    <div class="px-6 py-4">

                        <a href="#"
                            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">Best
                            View in Newyork City</a>

                    </div>


                </div>
                <div class="rounded overflow-hidden shadow-lg">

                    <a href="#"></a>
                    <div class="relative">
                        <a href="#">
                            <img class="w-full"
                                src="https://images.pexels.com/photos/196667/pexels-photo-196667.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>



                    </div>
                    <div class="px-6 py-4">

                        <a href="#"
                            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">Best
                            View in Newyork City</a>

                    </div>


                </div>


    </section>
@endsection

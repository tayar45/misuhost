@extends('layouts.app')


@section('content')
<div class="">
    <!-- Section: Design Block -->
    <section  style="height: 100vh" class="background-radial-gradient mb-32">
        <style>
            .background-radial-gradient {
                background-color: hsl(218, 41%, 15%);
                background-image: radial-gradient(650px circle at 0% 0%,
                        hsl(218, 41%, 35%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%),
                    radial-gradient(1250px circle at 100% 100%,
                        hsl(218, 41%, 45%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%);
            }
        </style>

        <div  class="px-6 py-12 pt-24 text-center md:px-12 lg:text-left">
            <div class="container mx-auto">
                <div class="grid items-center gap-12 lg:grid-cols-2">
                    <div class="mt-12 lg:mt-0">
                        <h1
                            class="mb-8 text-5xl font-bold tracking-tight text-[hsl(218,81%,95%)] md:text-6xl xl:text-7xl">
                            The Music <br /><span class="text-[hsl(218,81%,75%)]">is our refuge</span>
                        </h1>
                        <p class="text-lg text-[hsl(218,81%,95%)]">
                            are you ready to go into a world full of music?
                            <br>you can listen and share your music with others
                        </p>



                        <button type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mt-5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get started</button>



                    </div>
                    <div class="mb-12 lg:mb-0">
                        <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
                            style="padding-top: 56.25%">
                            <iframe
                                class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 h-full w-full"
                                src="https://www.youtube.com/embed/pdivpiCsqKU"
                                allowfullscreen="" data-gtm-yt-inspected-2340190_699="true"
                                id="240632615"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

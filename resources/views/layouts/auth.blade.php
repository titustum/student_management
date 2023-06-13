@extends('layouts.app')

@section('content')

<div class="grid lg:grid-cols-2 h-[100vh]">
        <div class="bg-green-600 py-[7vh] hidden lg:inline">
            <div class="px-6">
                <div>
                    <div class="bg-white h-32 w-32 rounded-full bg-white 
                    mx-auto text-center">
                    <img src="{{ URL::to('images/logo.svg') }}" 
                        alt="h-20 h-auto" srcset="">
                    </div>
                </div>
                <div class="mt-4 text-2xl text-white font-bold py-2 border-b-2 uppercase">Student Management System</div>
                <div class="mt-4 text-lg text-white">
                    Say goodbye to mountains of paperwork, time-consuming processes, 
                    and fragmented information about your students. Our system leverages cutting-edge 
                    technology to provide a seamless digital experience, empowering you to focus 
                    on what truly matters – serving the students and driving progress.
                </div>
                <div class="mt-4 font-bold text-xl text-white">Key Benefits</div>
                <ul class="list-inside list-disc text-white">
                    <li>Improved efficiency</li>
                    <li>Real-Time access</li>
                    <li>Mobile friendly</li>
                </ul>
            </div>
        </div>
            
        <div style="background-image: url({{URL::to('images/pattern.png') }});" 
        class="bg-repeat bg-pattern-img py-[5vh] flex flex-col justify-center">
            
        
        
        @yield('form')


      </div>

@endsection
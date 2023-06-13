@extends('layouts.app')

@section('content')

<section class="flex h-[100vh]">
    
    <nav class="shrink-0 bg-primary overflow-auto min-w-[200px] flex flex-col py-2 px-2">
        <div class="mt-2">
            <img src="{{ URL::to('images/logo.svg') }}" alt="App Logo" 
            class="h-16 mx-auto">
        </div>

        <div class="grid gap-2 mt-6">
           <a href="{{ route('dashboard.home') }}" class="block pl-6 bg-green-200 py-2 transition-all hover:bg-secondary hover:text-white rounded">
                Home
            </a>
            <a href="{{ route('students.view') }}" class="block pl-6 bg-green-200 py-2 transition-all hover:bg-secondary hover:text-white rounded">
                Students
            </a> 
            <a href="{{ route('marks.view') }}" class="block pl-6 bg-green-200 py-2 transition-all hover:bg-secondary hover:text-white rounded">
                Marks
            </a> 
            <a href="#" class="block pl-6 bg-green-200 py-2 transition-all hover:bg-secondary hover:text-white rounded">
                Teachers
            </a> 
        </div>
        <div class="grid gap-2 mt-2 border-t">
           <a href="{{ route('students.add') }}" class="block pl-6 mt-2 bg-green-200 py-2 transition-all hover:bg-secondary hover:text-white rounded">
                Add Student
            </a>
            <a href="{{ route('marks.add') }}" class="block pl-6 bg-green-200 py-2 transition-all hover:bg-secondary hover:text-white rounded">
                Add Marks
            </a> 
            <a href="#" class="block pl-6 bg-green-200 py-2 transition-all hover:bg-secondary hover:text-white rounded">
                Add Teacher
            </a> 
        </div>


        <a href="#" class="mt-auto mt-2 block pl-6 bg-red-200 py-2 transition-all hover:bg-red-600 hover:text-white rounded">
            Logout
            <i class="fas fa-arrow-right"></i>
        </a> 

        

    </nav>
    <main class="flex-grow flex flex-col">
        <div class="bg-white h-[55px] flex items-center justify-between border-b shrink-0 px-3 py-2">
            <div class="text-xl font-bold text-primary hidden lg:inline">STUDENT MANAGEMENT SYSTEM</div>
            <div class="flex py-2 px-5 rounded-md border bg-gray-200 border border-transparent hover:border-secondary">
                <label for="query" class="sr-only">Search</label>
                <input type="search" name="query" id="query" placeholder="Search students, books .."
                class="bg-transparent outline-none px-4">
                <button type="submit" name="submit-search">
                    <i class="fa fa-search text-primary"></i>
                </button>
            </div>
            <a href="#" class="text-lg">
                <i class="fas fa-user mr-2"></i>
                James Bett
            </a>
        </div>
        <div class="p-2 flex-grow bg-gray-50 max-h-[calc(100vh-56px)] overflow-auto">
            <div class="rounded-md p-3">
                @yield('main')
            </div>
        </div>
    </main>

</section>




    

@endsection
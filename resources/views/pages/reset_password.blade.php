@extends('layouts.auth')

@section('form')

<div class="bg-white w-[90%] md:w-[60%] lg:w-[70%] xl:w-[60%] rounded py-4 px-3 mx-auto">
                
    <div class="lg:hidden">
        <div>
            <img src="{{ URL::to('images/logo.svg') }}" alt="Student System Logo" 
            class="h-16 mx-auto rounded-circle">
        </div>
        <div class="mb-3 mt-2 text-center py-2 text-2xl border-b-4 border-secondary font-bold">
            STUDENT MANAGEMENT SYSTEM
        </div>
        
    </div>
    
    <div class="mt-4 md:mt-0 text-primary py-2 border-b text-xl text-center font-semibold">
        <i class="fas fa-user text-secondary mr-1"></i> 
        RESET PASSWORD </div>

        <div class="mt-3 border border-transparent hover:border-secondary flex items-center bg-gray-200 
            rounded py-2 px-3 font-medium rounded">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" placeholder="Email"
            class="bg-transparent outline-none flex-grow">
            <i class="fas fa-user shrink-0"></i>
        </div>

    <div class="mt-3 flex items-center">
        <button class="hover:opacity-70 py-2 px-4 bg-primary rounded text-white">
            <i class="fas fa-key mr-1"></i>
            Send Reset Link
        </button>

        <a href="{{ route('welcome') }}" class="ml-auto text-primary hover:underline">Back To Login?</a>

    </div>
</div>
</div>

@endsection
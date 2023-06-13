@extends('layouts.dash')

@section('main') 

<div class="text-xl font-semibold text-primary py-2 border-b-2 border-primary">
    ADD STUDENT MARKS
</div>

<div class="mt-3 bg-white rounded p-3">

    <div class="mt-2">
        <label for="admno">Student Admission Number</label>
        <input type="number" name="admno" id="admno" placeholder="e.g. 2234"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>
    <div class="mt-3">
        <label for="exam">Exam Name</label>
        <input type="text" name="exam" id="exam" placeholder="e.g. Zonal Mocks"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>
    <div class="mt-3">
        <label for="exam">Subject</label>
        <input type="number" name="subject" id="subject" placeholder="e.g. English"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>
    <div class="mt-3">
        <label for="marks">Mark Gotten</label>
        <input type="number" name="marks" id="marks" placeholder="e.g. 67"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>

    <div class="mt-3">
        <button class="bg-primary py-3 hover:opacity-70 w-full uppercase font-semibold rounded text-white">
            Add New Student 
            <i class="fas ml-2 fa-arrow-right"></i>
        </button>
    </div>
    
</div>

@endsection
@extends('layouts.dash')

@section('main') 

<div class="text-xl font-semibold text-primary py-2 border-b-2 border-primary">
    ADD NEW STUDENTS
</div>

<div class="mt-3 bg-white rounded p-3">

    <div class="mt-2">
        <label for="name">Student Name</label>
        <input type="text" name="name" id="name" placeholder="e.g. John Kipkoech"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>
    <div class="mt-3">
        <label for="class">Class Admitted To</label>
        <input type="text" name="class" id="class" placeholder="e.g. 4 West"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>
    <div class="mt-3">
        <label for="dorm">Domitory Admitted To</label>
        <input type="text" name="dorm" id="dorm" placeholder="e.g. Mt. Elgon"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>
    <div class="mt-3">
        <label for="parent">Parent Name</label>
        <input type="text" name="parent" id="parent" placeholder="e.g. Michael Koech"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>
    <div class="mt-3">
        <label for="phone">Parent Phone</label>
        <input type="text" name="phone" id="phone" placeholder="e.g. 0725 414 414"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>
    <div class="mt-3">
        <label for="desease">Injury/Illness</label>
        <input type="text" name="desease" id="desease" placeholder="e.g. Asthma"
        class="w-full rounded py-2 px-4 outline-none border hover:border-primary focus:border-primary">
    </div>
    <div class="mt-3">
        <button class="bg-primary py-2 w-full font-semibold rounded-md text-white">
            Add New Student 
            <i class="fas ml-2 fa-arrow-right"></i>
        </button>
    </div>
    
</div>

@endsection
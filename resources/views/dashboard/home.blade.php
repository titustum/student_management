@extends('layouts.dash')

@section('main')

<div class=" grid grid-cols-4 gap-3">
    
    <a href="#" class="bg-white hover:bg-green-100 text-center rounded-md p-4 border">
        <div class="text-4xl">
            <i class="fas fa-user-graduate"></i>
        </div>
        <div class="text-lg font-medium mt-2">24 Students</div>
    </a>
    <a href="#" class="bg-white hover:bg-green-100 text-center rounded-md p-4 border">
        <div class="text-4xl">
            <i class="fas fa-person-chalkboard"></i>
        </div>
        <div class="text-lg font-medium mt-2">24 Teachers</div>
    </a>
    <a href="#" class="bg-white hover:bg-green-100 text-center rounded-md p-4 border">
        <div class="text-4xl">
            <i class="fas fa-calendar-check"></i>
        </div>
        <div class="text-lg font-medium mt-2">3 Exams</div>
    </a>
    <a href="#" class="bg-white hover:bg-green-100 text-center rounded-md p-4 border">
        <div class="text-4xl">
            <i class="fas fa-trophy"></i>
        </div>
        <div class="text-lg font-medium mt-2">Top Students</div>
    </a>

</div>

<div class="text-xl mt-3 font-semibold text-primary py-2 border-b-2 border-primary">
    Recent Admitted Students
</div>

<div class="mt-5">
    <table class="table-auto w-full bg-white border">
        <thead>
          <tr class="text-left bg-primary">
            <th class="border p-2">Adm. No.</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Class</th>
            <th class="border p-2">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="border p-2 text-left">7851</th>
            <td class="border p-2">David Oginde</td>
            <td class="border p-2">4 West</td>
            <td class="border p-2 text-center">
                <a href="#" class="bg-green-200 py-1 px-3 rounded mx-auto">
                    View
                    <i class="ml-2 fas fa-eye"></i>
                </a>
            </td>
          </tr>
          <tr>
            <th class="border p-2 text-left">7851</th>
            <td class="border p-2">David Oginde</td>
            <td class="border p-2">4 West</td>
            <td class="border p-2 text-center">
                <a href="#" class="bg-green-200 py-1 px-3 rounded mx-auto">
                    View
                    <i class="ml-2 fas fa-eye"></i>
                </a>
            </td>
          </tr>
          <tr>
            <th class="border p-2 text-left">7851</th>
            <td class="border p-2">David Oginde</td>
            <td class="border p-2">4 West</td>
            <td class="border p-2 text-center">
                <a href="#" class="bg-green-200 py-1 px-3 rounded mx-auto">
                    View
                    <i class="ml-2 fas fa-eye"></i>
                </a>
            </td>
          </tr>
        </tbody>
      </table>
</div>

@endsection
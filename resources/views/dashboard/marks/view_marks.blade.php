@extends('layouts.dash')

@section('main')

<div class=" grid grid-cols-4 gap-3">
    
    <a href="#" class="bg-white hover:bg-green-100 text-center rounded-md p-4 border">
        <div class="text-4xl">
            <i class="fas fa-users"></i>
        </div>
        <div class="text-lg font-medium mt-2">Form 1</div>
    </a>
    <a href="#" class="bg-white hover:bg-green-100 text-center rounded-md p-4 border">
        <div class="text-4xl">
            <i class="fas fa-users"></i>
        </div>
        <div class="text-lg font-medium mt-2">Form 2</div>
    </a>
    <a href="#" class="bg-white hover:bg-green-100 text-center rounded-md p-4 border">
        <div class="text-4xl">
            <i class="fas fa-users"></i>
        </div>
        <div class="text-lg font-medium mt-2">From 3</div>
    </a>
    <a href="#" class="bg-white hover:bg-green-100 text-center rounded-md p-4 border">
        <div class="text-4xl">
            <i class="fas fa-users"></i>
        </div>
        <div class="text-lg font-medium mt-2">Form 4</div>
    </a>

</div>

<div class="text-xl mt-3 font-semibold text-primary py-2 border-b-2 border-primary">
    FORM 1 STUDENTS
</div>

<div class="mt-5">
    <table class="table-auto w-full bg-white border">
        <thead>
          <tr class="text-left bg-primary">
            <th class="border p-2">Adm. No.</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Class</th>
            <th class="border p-2">Avg Marks</th>
            <th class="border p-2">Avg Grade</th>
            <th class="border p-2">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="border p-2 text-left">7851</th>
            <td class="border p-2">James Kurgat</td>
            <td class="border p-2">1 West</td>
            <td class="border p-2">72%</td>
            <td class="border p-2 text-secondary font-semibold">A-</td>
            <td class="border p-2 text-center">
                <a href="#" class="bg-green-200 py-1 px-3 rounded mx-auto">
                    Marks Report
                    <i class="ml-2 fas fa-eye"></i>
                </a>
            </td>
          </tr>
          <tr>
            <th class="border p-2 text-left">7851</th>
            <td class="border p-2">Dennis Muchiri</td>
            <td class="border p-2">1 West</td>
            <td class="border p-2">68.6%</td>
            <td class="border p-2 text-secondary font-semibold">B+</td>
            <td class="border p-2 text-center">
                <a href="#" class="bg-green-200 py-1 px-3 rounded mx-auto">
                Marks Report
                    <i class="ml-2 fas fa-eye"></i>
                </a>
            </td>
          </tr>
          <tr>
            <th class="border p-2 text-left">7851</th>
            <td class="border p-2">David Oginde</td>
            <td class="border p-2">1 South</td>
            <td class="border p-2">68.5%</td>
            <td class="border p-2 text-secondary font-semibold">B+</td>
            <td class="border p-2 text-center">
                <a href="#" class="bg-green-200 py-1 px-3 rounded mx-auto">
                    Marks Report
                    <i class="ml-2 fas fa-eye"></i>
                </a>
            </td>
          </tr>
        </tbody>
      </table>
</div>

@endsection
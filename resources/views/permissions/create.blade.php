@extends('layouts.app')

@section('content')
<form action="{{route('permissions.store')}}" method="POST">
    @csrf

    {{-- <label for="name">Name</label>
    <input type="text" name="name" id="" placeholder="example: edit posts"> --}}
    <div class="max-w-sm">
        <label for="input-label" class="block text-sm font-medium mb-2">Permission Name:</label>
        <input type="text"  name="name" id="input-label" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="permission name">
     
        <label for="input-label" class="block text-sm font-medium mb-2">Permission Guard Name:</label>
        <input type="text" name="guard_name" id="input-label" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="permission guard name" value="web" readonly>
    
    </div>
    
    <br>

    {{-- <label for="guard_name">Guard Name</label>
    <input type="text" name="guard_name" id="" placeholder="example: web" value="web" readonly> --}}

    <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
        Submit
      </button>
   
</form>

@endsection

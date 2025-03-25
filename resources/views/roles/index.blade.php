@extends('layouts.app')

@section('content')
{{-- <table>
    <a href="{{route('roles.create')}}">Add Roles</a>
    <a href="{{route('permissions.index')}}">View Permissions Table</a>
    <thead>
        <tr>
            <th>Roles Name</th>
            <th>Roles Guard Name</th>
            <th>Permissions</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->name }}</td>
            <td>{{ $role->guard_name }}</td>
            <td>
                @foreach ($role->permissions as $permit)
                    {{ $permit->name.', ' }}
                @endforeach
            </td>
            <td><a href="{{route('roles.edit',$role->id)}}">Edit</a>
                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button   type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                </form>
               
            </td>
        </tr>
        @endforeach
    </tbody>
</table> --}}



<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <a href="{{route('roles.create')}}"  class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 focus:outline-hidden focus:bg-blue-100 focus:text-blue-800 active:bg-blue-100 active:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:bg-blue-800/30 dark:hover:text-blue-400 dark:focus:bg-blue-800/30 dark:focus:text-blue-400 dark:active:bg-blue-800/30 dark:active:text-blue-400">Add Roles</a>
        <a href="{{route('permissions.index')}}">View Permissions Table</a>
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 text-black dark:divide-neutral-700">
            <thead>
              <tr>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Permissions Name</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Guard name</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Permissions</th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach ($roles as $role)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black dark:text-neutral-200">{{ucfirst($role->name) }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-black dark:text-neutral-200">{{$role->guard_name}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-black dark:text-neutral-200">
                    @foreach ($role->permissions as $permit)
                        {{ $permit->name.', ' }}
                    @endforeach
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <div class="flex items-center justify-end gap-x-2">
                        <a href="{{route('roles.edit', $role->id)}}" 
                           class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-teal-500 hover:bg-teal-100 focus:outline-hidden focus:bg-teal-100 hover:text-teal-800 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-teal-800/30 dark:hover:text-teal-400 dark:focus:text-teal-400">
                           Edit
                        </a>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    onclick="return confirm('Are you sure you want to delete this post?')" 
                                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-red-500 hover:bg-red-100 focus:outline-hidden focus:bg-red-100 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-red-800/30 dark:hover:text-red-400 dark:focus:bg-red-800/30 dark:focus:text-red-400">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
              </tr>
            @endforeach
             
  
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>




@endsection



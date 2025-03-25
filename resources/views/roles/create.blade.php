
<form action="{{route('roles.store')}}" method="POST">
    @csrf
    
        <label for="name">Name</label>
        <input type="text" name="name" id="" placeholder="example: editor">
        <br>
        <label for="guard_name">Guard name</label>
        <input type="text" name="guard_name" id="" placeholder="example: web" value="web" readonly>
        
    
        <p>Assign Permissions</p>
       
         @foreach ($setPermissions as $setPermission)
            <input type="checkbox" name="permissions[]" value="{{ $setPermission->id }}" {{ in_array($setPermission->id, old('permissions', [])) ? 'checked' : '' }}> 
             <label for="">{{ $setPermission->name }}</label>
        @endforeach
        <br>
        <button type="submit">Submit</button>
    </form>
    
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- @extends('layout') --}}

@section('title','edit')
<form method="POST" action="{{ route('todo_update',[$user->id]) }}">
    {{ @csrf_field()}}
    @method('PUT')
    <div class=form-group>
    NAME<input type="text" name="firstname" placeholder="firstname" class="form-control" value="{{ $user->firstname }}" >
    <span class="error">
    @error('firstname')
    {{ $message }}
        
    @enderror</span>
    </div>
    <div class=form-group>
    Email<input type="email" name ="email" placeholder="email" class="form-control" value={{ $user->email }}>
    <span class="error">@error('email')
    {{ $message }}
        
    @enderror</span>
    </div>
    <div class=form-group>
        Password<input type="password" name ="password" placeholder="*****" class="form-control"  >
        <span class="error">@error('password')
        {{ $message }}
            
        @enderror</span>
        </div>
        <div class=form-group>
            Image<input type="text" name ="image" placeholder="image" class="form-control"value={{ $user->image }}>
            <span class="error">@error('email')
            {{ $message }}
                
            @enderror</span>
            </div>
    <div class=form-group> 
        <input type="submit" class="btn btn-primary" value="submit">
    </div>


</form>
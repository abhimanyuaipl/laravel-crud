@yield('formpage')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title','formpage')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  
    <div class="container mt-4">
       
        <x-sidebar name="abhimanyu"/>
    <button  id="button1" class="btn btn-success">button</button>
    <p>this content will  hide and show on click on button</p>
    <form method="POST" action="form_submit" enctype="multipart/form-data">
        {{ @csrf_field()}}
        <div class=form-group>
        NAME
        <input 
        type="text"
         name="firstname"
          placeholder="firstname" 
          class="form-control" 
          value="{{ old('firstname') }}">
        <span class="error">
        @error('firstname')
        {{ $message }}
            
        @enderror</span>
        </div>
        <div class=form-group>
        Email<input type="email" name ="email" placeholder="email" class="form-control"    value="{{ old('email') }}">
        <span class="error">@error('email')
        {{ $message }}
            
        @enderror</span>
        </div>
        <div class=form-group>
            Password<input type="password" name ="password" placeholder="*****" class="form-control" >
            <span class="error">@error('password')
            {{ $message }}
                
            @enderror</span>
            </div>
            <div class=form-group>
                Image<input type="file" name ="image" placeholder="image" class="form-control" value={{ old('image') }}>
                <span class="error">@error('image')
                {{ $message }}
                    
                @enderror</span>
                </div>
        <div class=form-group> 
            <input type="submit" class="btn btn-primary" value="submit">
        </div>


    </form>
    {{-- @foreach($user as $item)
    {{-- @dd($item['firstname']); --}}
   {{-- <p>My name is 
       <span style="color:brown;"> {{$item['firstname']}}</span>
         and My email is 
         <span style="color:brown;"> {{ $item['email'] }} </span>
 </p> --}}
      
    {{-- @endforeach --}} 

</div>
</body>
</html>
<style>
.error{
    color:red;
}



</style>
<script>
    $(document).ready(function(){
        $("#button1").click(function(){
            $("form").toggle();
        })
    })
</script>
 




@extends('layout')
@section('title','show')


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>







<div class="bg-info">
    
    <h1 class="text-center text-uppercase">data fetch from database</h1>
    </div>

    <div>
    
<div class="container">
    <div class="text-center text-uppercase">
        {{ session('msg') }}
</br>

    </div>
   
<a href="formpage">back</a>
   
<table class="table table-dark  mt-4
">
    <tr class="text-uppercase">
        <td>id</td>
        <td>name</td>
        <td>email</td>
      
        <td>image</td>
        <td>DELETE</td>
        <td>edit</td>
    </tr>
    @foreach ($users as $item)
    <tr >
        <td>{{ $item->id }}</td>
        <td>{{ $item->firstname }}</td>
        <td>{{$item->email  }}</td>
        <td ><img src="{{ asset('uploads/'.$item->image) }}" alt="" width="100px" height="100px">{{ $item->image }}</td>
        <td ><a href="todo_delete/{{ $item->id }}"><button class="btn btn-danger text-uppercase">delete</button></a></td>
        <td ><a href="todo_edit/{{ $item->id }}"><button class="btn btn-primary text-uppercase">edit</button></a></td>
    </tr>

        
    @endforeach




</table>
</div>
<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Support\Facades\Hash;
// use App\Models\crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use lluminate\Database\Eloquent\Collection;
class TodoController extends Controller
{



    public function index()
    {
    }
        
    public function create()
    {
        //
    }

   
    public function store(Request $request)


    {   
        Todo::create(request()->validate([
            'firstname'=>'required',
            'email'=>'required|email|unique:crud,email',
            'password'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|unique:crud,image'
        ]));



            $res=new Todo;
            $res->firstname=$request->input('firstname');
            $res->email=$request->input('email');
            $res->password=Hash::make($request->input('password'));
            if($request->hasfile('image')){
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/',$filename);
                $res->image=$filename;
            }else{
                return $request;
            }
            // $res->image=$request->input('image');
            $res->save();
            $request->session()->flash('msg','Data submitted');
            return redirect('todo_show');
    }

    
    public function show(Todo $todo)
    {                      
        $users = DB::select('select * from crud');
        

        return view('user/header').view('todo_show', ['users' => $users]).view('user/footer');
    }

    
    public function edit(Todo $todo, $id)
    {
        return view('todo_edit')->with('user',Todo::find($id));
    }

    
    public function update(Request $request, Todo $id)
    { 


        $request->validate([
            'firstname'=>'required',
            'email'=>'required|email|unique:crud,email',
            'password'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|unique:crud,image'
        ]);
          $res=Todo::find($id->id);
        //  print($id);

          $res->firstname=$request->input('firstname');
          $res->email=$request->input('email');
          $res->password=Hash::make($request->input('password'));
          if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/',$filename);
            $res->image=$filename;
        }else{
            return $request;
        }
        // $res->image=$request->input('image');
        $res->save();
        $request->session()->flash('msg','Data updated');
        return redirect('todo_show');

    }

   
    public function destroy(Todo $todo, $id)
    {
       
        Todo::destroy(array('id',$id));

         return redirect('todo_show');
    }
}

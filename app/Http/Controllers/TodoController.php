<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Support\Facades\Validator;
class TodoController extends Controller
{
   public function index(){
      $todos=Todo::orderBy('completed')->get();
      
   //  return view('todos.index')->with(['todos'=>$todos]);
    return view('todos.index',compact('todos'));
   }
   public function create(){
    return view('todos.create');
   }
   public function edit(Todo $todo){
      
      return view('todos.edit',compact('todo'));
    
   }
   public function complete(Todo $todo){
      $todo->update(['completed'=>true]);
      return redirect(route('todo.index'))->with('message','marked as completed');
   }
   public function incomplete(Todo $todo){
      $todo->update(['completed'=>false]);
      return redirect(route('todo.index'))->with('message','marked as incompleted');
   }
   public function update(TodoCreateRequest $request, Todo $todo){
      $todo->update(['title'=>$request->title]);
      return redirect(route('todo.index'))->with('message','updated');
   }
   public function store(TodoCreateRequest $request){
    //    $rules=[
    //        'title'=>'required|max:255',
    //    ];
    //    $messages=[
    //        'title.required'=>'Todo is required',
    //        'title.max'=>'Todo title should not be greather than 255',
    //    ];
    //    $validator=validator::make($request->all(),$rules,$messages);
    //    if($validator->fails()){
    //        return redirect()->back()->withErrors($validator)->withInput();
    //    }
    
    Todo::create($request->all());
    return redirect()->back()->with('message','Todo created successfully');
   }
}

@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h2 class="text-2xl ">All your TO-DOs</h2>
    <a href="/todos/create" class="mt-2 ml-2 text-white text-blue-400   cursor-pointer  ">
        <span class="fa fa-plus-circle text-white-400 "></span>
    </a>
    
</div>
<x-alert/>
<ul class="my-5">
    @foreach($todos as $todo)
    <li class="flex justify-between py-1">
        <div>
            @include('todos.complete-button')
        </div>
        @if($todo->completed)
            <p class="line-through">{{$todo->title}}</p>
        @else
            <p class="">{{$todo->title}}</p>
        @endif
        <div>
            <a href="{{'/todos/'.$todo->id.'/edit'}}" class="  text-orange-400 cursor-pointer  text-white ">
                <span class="px-2 fa fa-edit"></span>
            </a>
            <a href="{{'/todos/'.$todo->id.'/edit'}}" class="  text-red-400 cursor-pointer  text-white ">
                <span class="px-2 fa fa-trash"></span>
            </a>
        
        </div>
        
        
           
        
        
    </li>
    @endforeach
</ul>
@endsection
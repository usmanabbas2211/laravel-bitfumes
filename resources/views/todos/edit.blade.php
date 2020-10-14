@extends('todos.layout')
@section('content')
 <h2 class="text-3xl border-b pb-4">Update this To-Do</h2>

<form method="POST" action="{{route('todo.update',$todo->id)}}" class="py-5 ">
    <x-alert/>
    @csrf
    @method('patch')
    <input type="text" value="{{$todo->title}}" class="py-2 px-2 border" name="title">
    <input type="submit" class="p-2 rounded-lg border " value="Update">
</form>
<a href="/todos" class=" mx-5 px-1 py-1 bg-white-400 cursor-pointer rounded-lg border">Back</a>
@endsection
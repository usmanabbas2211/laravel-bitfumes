@extends('todos.layout')

@section( 'content')
    <h2 class="text-2xl border-b pb-4">What next you need TO-DO</h2>
    <form method="POST" action="/todos/create" class="py-5 ">
        <x-alert/>
        @csrf
        <input type="text" class="py-2 px-2 border" name="title">
        <input type="submit" class="p-2 rounded-lg border " value="create">
    </form>
    <a href="/todos" class=" mx-5 px-1 py-1 bg-white-400 cursor-pointer rounded-lg border">Back</a>
@endsection
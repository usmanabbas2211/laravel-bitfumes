        @if($todo->completed)
           <span class="px-2 text-green-500 cursor-pointer fa fa-check" onclick="event.preventDefault();
            document.getElementById('form-incomplete-{{$todo->id}}').submit()" />
           <form style="display:" id="{{'form-incomplete-'.$todo->id}}" action="{{route('todo.incomplete',$todo->id)}}" method="POST">
                
                @csrf
                @method('delete')
           </form>
           @else
           <span class="px-2 text-gray-500 cursor-pointer fa fa-check" onclick="event.preventDefault();
            document.getElementById('form-complete-{{$todo->id}}').submit()" />
           <form style="display:" id="{{'form-complete-'.$todo->id}}" action="{{route('todo.complete',$todo->id)}}" method="POST">
                
                @csrf
                @method('put')
           </form>
          
           @endif
@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">

                <div class="panel-heading">Main Content</div>

                <div class="panel-body">
                    
                    <ul class="list-group">
                        @foreach ($tasks as $task)
                            <li class="list-group-item"><a href="/tasks/{{ $task->id }}">{{ $task->title }} </a></li>
                            <div>
                                <p>Completed on {{ $task->updated_at }}</p>

                                <p>{{ $task->description }}</p>

                                @if (count($task->notes))
                                    @foreach ($task->notes as $note)
                                        <p>{{ $note->body }} created on {{ $note->created_at }}</p>
                                    @endforeach
                                @endif
                                    

                                <form action="/notes/" method="POST">
                        
                                {{ csrf_field() }}
                                    
                                    <div class="form-group">
                                        <label for="description">Summary</label>
                                        <textarea name="summary" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-default" value="Create">
                                    </div>

                                </form>
                            </div>



                        @endforeach
                    </ul>
                
                </div>  

            </div>

        </div>

    </div>
        
</div>
@endsection

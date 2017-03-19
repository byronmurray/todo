@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">

                <div class="panel-heading">Completed</div>

                <div class="panel-body">
                    
                    <ul class="list-group">
                        @foreach ($tasks as $task)
                            <li class="list-group-item"><a href="/tasks/{{ $task->id }}">{{ $task->title }} </a></li>
                        @endforeach
                    </ul>
                
                </div>  

            </div>

        </div>

    </div>
        
</div>
@endsection

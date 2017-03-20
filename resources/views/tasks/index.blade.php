@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">

                <div class="panel-heading">Main Content</div>

                <div class="panel-body">
                    
                    <form action="/tasks/edit" method="POST">
                        {{ csrf_field() }}
                        
                        <!-- make a list for recurring todo's like shopping list -->
                        <!-- display on choosen dates, like every friday put out rubbish -->

                        <div class="form-group">
                            <a href="/tasks/create" class="btn btn-default">Add New</a>
                            <input type="submit" value="Update" class="btn btn-default">
                        </div>
                    
                    
                        <ul class="list-group">
                            @foreach ($tasks as $task)
                            @if ($task->importance == 1)
                                <li class="list-group-item" style="background: red;">
                            @else
                                <li class="list-group-item">
                            @endif
                                <a href="/tasks/{{ $task->id }}">{{ $task->title }} </a><input type="checkbox" name="task[]" value="{{ $task->id }}" class="pull-right"></li>
                            @endforeach
                        </ul>

                    </form>
                    
                
                </div>  

            </div>

        </div>

    </div>
        
</div>
@endsection

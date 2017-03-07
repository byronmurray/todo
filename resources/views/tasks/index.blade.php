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
                        
                        <!-- send form to be edited
                        will send an array of checked vaules if checked
                        @controller check these vaules and update the tasks->compeleted to true -->

                        <div class="form-group">
                            <a href="/tasks/create" class="btn btn-default">Add New</a>
                            <input type="submit" value="Update" class="btn btn-default">
                        </div>
                    
                    
                        <ul class="list-group">
                            @foreach ($tasks as $task)
                                <li class="list-group-item"><a href="/tasks/{{ $task->id }}">{{ $task->title }} </a><input type="checkbox" name="{{ $task->id }}" value="{{ $task->id }}" class="pull-right"></li>
                            @endforeach
                        </ul>

                    </form>
                    
                
                </div>  

            </div>

        </div>

    </div>
        
</div>
@endsection

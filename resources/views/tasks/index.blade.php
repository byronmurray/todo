@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">

                <div class="panel-heading">Main Content</div>

                <div class="panel-body">

                <div class="form-group">
                    <a href="/tasks/create" class="btn btn-default">Add New</a>
                    <a href="" class="btn btn-default">Update</a>
                </div>
                    
                    <ul class="list-group">
                        @foreach ($tasks as $task)
                            <a href="/tasks/{{ $task->id }}"><li class="list-group-item">{{ $task->title }} <input type="checkbox" class="pull-right"></li></a>
                        @endforeach
                    </ul>
                
                </div>  

            </div>

        </div>

    </div>
        
</div>
@endsection

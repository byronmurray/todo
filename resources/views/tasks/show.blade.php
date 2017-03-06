@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">

                <div class="panel-heading">{{ $task->title }}</div>

                <div class="panel-body">

                    <p><strong>Created on : </strong>{{ $task->created_at }}</p>

                    <p>
                        <h3>Description</h3>
                        {{ $task->description }}
                    </p>
                    
                    <p>Make edits to title<br>description<br> add notes<br>Change recurring type<br>
                    Is where you would see all the stats on a recurring task</p>

                    <a href="#" class="btn btn-default">Update</a>

                </div>  

            </div>

        </div>

    </div>
        
</div>
@endsection

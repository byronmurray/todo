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

                    @if (count($task->notes))
                        <h3>Notes</h3>
                        <hr>
                        @foreach ($task->notes as $note)
                            <p><strong>Created on : </strong>{{ $note->created_at }}</p>
                            <p>{{ $note->body }} </p>
                            <hr>
                        @endforeach
                    @endif
                    
                    <h3>Add Note</h3>

                    <form action="#" method="POST">
                        
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <textarea name="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-default" value="Add">
                        </div>

                    </form>


                </div>  

            </div>

        </div>

    </div>
        
</div>
@endsection

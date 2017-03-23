@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">

                <div class="panel-heading">Current Tasks</div>

                <div class="panel-body">
                    
                    <form action="/tasks/edit" method="POST">
                        {{ csrf_field() }}
                        
                        <!-- make a list for recurring todo's like shopping list -->
                        <!-- display on choosen dates, like every friday put out rubbish -->

                        <div class="form-group pull-right">
                            <a href="/tasks/create" class="btn btn-primary">Add New</a>
                            <input type="submit" value="Update" class="btn btn-success">
                        </div>
                    
                    
                        <ul class="list-group">
                            <?php $i = ''; $ii = ''; $iii = ''; ?>
                            @foreach ($tasks as $task)
                                @if ($task->importance == 1)
                                    @if ($i == '')
                                        <h2>High Importance</h2>
                                    @endif
                                    <li class="list-group-item high">
                                    <?php $i++; ?>
                                @elseif ($task->importance == 2)
                                    @if ($ii == '')
                                        <h2>Medium Importance</h2>
                                    @endif
                                    <li class="list-group-item medium">
                                    <?php $ii++; ?>
                                @elseif ($task->importance == 3)
                                    @if ($iii == '')
                                        <h2>Low Importance</h2>
                                    @endif
                                    <li class="list-group-item low">
                                    <?php $iii++; ?>
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

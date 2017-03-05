@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">

                <div class="panel-heading">Main Content</div>

                <div class="panel-body">
                    
                    <h2>Create new task</h2>

                    <form action="">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Recurring Task</label>
                            <select name="state" id="task_state" class="form-control">
                                <option value="">One off</option>
                                <option value="">Daily</option>
                                <option value="">Weekly</option>
                                <option value="">Monthly</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Notify me </label>
                            <input type="checkbox" value="notifications">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-default" value="Create">
                        </div>

                    </form>
                
                </div>  

            </div>

        </div>

    </div>
        
</div>
@endsection

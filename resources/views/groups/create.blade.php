@extends('layout.main')

@section('main_content')

    <h2>Create New Groups</h2>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">New Group</h4>

        </div>
        <div class="card-body">
            <div class="col-md-6 mx-auto ">
                <form method="POST" action="{{ url('groups') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Group Title</label>
                        <input type="title" class="form-control" name="title" id="title"
                            placeholder="User Group Title">
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Title of User Groups</small>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@stop

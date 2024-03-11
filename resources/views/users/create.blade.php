@extends('layout.main')

@section('main_content')


    <h2>Add New Users</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">New Users</h4>

        </div>
        <div class="card-body">
            <div class="col-md-8 mx-auto ">

                {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
                <div class="form-group row">
                    <label for="group_id" class="col-sm-2 col-form-label">User Group <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        {{ Form::select('group_id', $groups, null, ['class' => 'form-control', 'id' => 'group_id', 'placeholder' => 'Group']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Phone']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Address']) }}
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop

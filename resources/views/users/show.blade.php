@extends('layout.main');

@section('main_content')

    <div class="row clearfix mb-4">
        <div class="col-md-4">
            <a href="{{ route('users.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left mr-2"></i>Back</a>
        </div>
        <div class="col-md-8 text-right">
            <a href="{{ asset(url('users/create')) }}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i>New Sale</a>
            <a href="{{ asset(url('users/create')) }}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i>New
                Purchase</a>
            <a href="{{ asset(url('users/create')) }}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i>New
                Payment</a>
            <a href="{{ asset(url('users/create')) }}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i>New
                Receipt</a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">{{ $user->name }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive table-striped table-borderless">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Group</th>
                        <td>{{ $user->group->title }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td> {{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $user->address }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@stop

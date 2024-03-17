@extends('layout.main');

@section('main_content')

    <div class="row clearfix mb-4">
        <div class="col-md-4">
            <a href="{{ route('products.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left mr-2"></i>Back</a>
        </div>

    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h5 class="m-0 font-weight-bold text-primary">{{ $product->name }}</h5> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive table-striped table-borderless">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Group</th>
                        <td>{{ $product->category->title }}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td> {{ $product->title }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td> {{ $product->description }}</td>
                    </tr>
                    <tr>
                        <th>Cost Price</th>
                        <td>{{ $product->cost_price }}</td>
                    </tr>
                    <tr>
                        <th>Sale Price</th>
                        <td>{{ $product->price }}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

@stop

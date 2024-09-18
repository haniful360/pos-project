@extends('layout.main')

@section('main_content')



<div class="row clearfix mb-4">
    <div class="col-md-6">
        <h3> products List</h3>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ asset(url('products/create')) }}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i>New
            products</a>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            {{-- {{ $productss }} --}}
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Cost_price</th>
                        <th>Sale Price</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Cost_price</th>
                        <th>Sale Price</th>
                        <th>Action</th>

                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->category->title }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->cost_price }}</td>
                        <td>{{ $product->price }}</td>

                        <td class="text-right">

                            <form method="POST" action=" {{ route('products.destroy', ['product' => $product->id]) }} ">
                                <a class="btn-sm btn-primary"
                                    href="{{ route('products.show', ['product' => $product->id]) }}"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn-sm btn-primary"
                                    href="{{ route('products.edit', ['product' => $product->id]) }}"><i
                                        class="fa fa-edit"></i></a>

                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" type="submit"
                                    class="btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


@stop
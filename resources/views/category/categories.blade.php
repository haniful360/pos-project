@extends('layout.main')

@section('main_content')



    <div class="row clearfix mb-4">
        <div class="col-md-6">
            <h3> categories List</h3>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('categories.create') }}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i>New Category</a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                {{-- {{ $categoriess }} --}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>

                                <td class="text-right">

                                    <form method="POST"
                                        action=" {{ route('categories.destroy', ['category' => $category->id]) }} ">

                                        <a class="btn-sm btn-primary"
                                            href="{{ route('categories.edit', ['category' => $category->id]) }}"><i
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

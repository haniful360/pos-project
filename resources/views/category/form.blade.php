@extends('layout.main')

@section('main_content')


    <h2>{{ $headline }}</h2>

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
            <h4 class="m-0  text-primary">{{ $headline }}</h4>
        </div>
        <div class="card-body">
            <div class="col-md-8 mx-auto ">
                {{-- isset($category) --}}
                @if ($mode == 'edit')
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put']) !!}
                @else
                    {!! Form::open(['route' => 'categories.store', 'method' => 'post']) !!}
                @endif



                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Title']) }}
                        {{-- <span class="text-danger">{{ $errors->first('title') }}</span> --}}
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

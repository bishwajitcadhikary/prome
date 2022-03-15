@extends('adminlte::page')

@section('title', trans_choice('general.our_services', 2))

@section('content_header')
    <div class="d-flex justify-content-between gap-2">
        <h1 class="m-0 text-dark">{{ trans_choice('general.our_services', 2) }}</h1>

        <a href="{{ route('admin.our-services.create') }}" class="btn btn-flat btn-dark">
            <i class="fas fa-plus"></i>
            {{ trans('general.add_new') }}
        </a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{ $dataTable->table(['class' => 'table table-bordered table-striped text-center rounded']) }}
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    {{ $dataTable->scripts() }}
@endsection

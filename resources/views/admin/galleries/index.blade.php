@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Galleries</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('admin.galleries.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            @include('components.search_bar_box', ['action' => 'GalleryController@index', 'button' => 'Search'])
            <div class="box-body">
                    @include('admin.galleries.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $galleries])

        </div>
    </div>
@endsection


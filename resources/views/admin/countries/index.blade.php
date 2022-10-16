@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Countries</h1>
        <h1 class="pull-right">
            @can('country-create')
               <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('admin.countries.create') }}">Add New</a>
            @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            @include('components.search_bar_box', ['action' => 'CountryController@index', 'button' => 'Search'])
            <div class="box-body">
                    @include('admin.countries.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


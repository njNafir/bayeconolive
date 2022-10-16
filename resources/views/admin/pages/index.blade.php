@extends('layouts.app')
@section('title') Pages @stop

@section('content')
	<section class="content-header">
        <h1 class="pull-left">Pages</h1>
        <h1 class="pull-right">
            {{-- @can('page-create') --}}
               <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ action('AdminPageController@create') }}">Add New</a>
            {{-- @endcan --}}
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            @include('components.search_bar_box', ['action' => 'AdminPageController@index', 'button' => 'Search'])
            <div class="box-body">
                <table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Image</th>
								<th>Status</th>
								<th>Date</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pages as $page)
							<tr>
								<td>{{ $page->id }}</td>
								<td>{{ $page->title }}</td>
								<td>{!! $page->imageToShow('photo') !!}</td>
								<td>
									@if($page->status) 
										<button type="button" class="btn btn-sm btn-success">Active</button>
									@else
										<button type="button" class="btn btn-sm btn-danger">Inactive</button>
									@endif
								</td>
								<td>{{ $page->created_at->toFormattedDateString() }}</td>
								<td>
									<a target="_blank" class="btn btn-primary" href="{{ action('WebController@page_show', $page->id) }}">View</a>
									<a class="btn btn-primary" href="{{ action('AdminPageController@edit', $page->id) }}">Edit</a>
									<a class="btn btn-danger del" href="{{ action('AdminPageController@destroy', $page->id) }}">Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $pages])

        </div>
    </div>
@endsection    



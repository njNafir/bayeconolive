@extends('layouts.app')
@section('title') Page Category @stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-4">
							<a href="{{ action('AdminPageCategoryController@create') }}" class="btn btn-primary">+Add New</a>
						</div>
						<div class="col-md-3 col-md-offset-5">
							<form action="{{ action('AdminPageCategoryController@search') }}">
								<div class="form-group">
									<input type="text" name="keyword" class="form-control" placeholder="Search" value="{{ request('keyword') ? request('keyword') : '' }}">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="panel-body btn-margins">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Status</th>
									<th>Date</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($page_categories as $category)
								<tr>
									<td>{{ $category->id }}</td>
									<td>{{ $category->name }}</td>
									<td>
										@if($category->status) 
											<button type="button" class="btn btn-sm btn-success">Active</button>
										@else
											<button type="button" class="btn btn-sm btn-danger">Inactive</button>
										@endif
									</td>
									<td>{{ $category->created_at->toFormattedDateString() }}</td>
									<td>
										<a class="btn btn-primary" href="{{ action('AdminPageCategoryController@show', $category->id) }}">View</a>
										<a class="btn btn-primary" href="{{ action('AdminPageCategoryController@edit', $category->id) }}">Edit</a>
										<a class="btn btn-danger del" href="{{ action('AdminPageCategoryController@destroy', $category->id) }}">Delete</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $page_categories->appends(['keyword' => request('keyword')])->links() }}
					</div>
				</div>
			</div><!-- /.panel-->
		</div><!--/ col-md-12 -->
	</div><!--/ row -->
@endsection	
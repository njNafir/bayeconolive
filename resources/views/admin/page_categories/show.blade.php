@extends('layouts.app')
@section('title') Page Category @stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="{{ action('AdminPageCategoryController@create') }}">+Add New</a>
				</div>
				<div class="panel-body btn-margins">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>Label</th>
									<th>Value</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Name</td>
									<td>{{ $page_cateogory->name }}</td>
								</tr>
								<tr>
									<td>Status</td>
									<td>
										@if($page_cateogory->status) 
											<button type="button" class="btn btn-sm btn-success">Active</button>
										@else
											<button type="button" class="btn btn-sm btn-danger">Inactive</button>
										@endif
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><!-- /.panel-->
		</div><!--/ col-md-12 -->
	</div><!--/ row -->
@endsection	
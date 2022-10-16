@extends('admin.layouts.layout')
@section('title') Events @stop
@section('main')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="{{ action('AdminEventController@create') }}">+Add New</a>
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
									<td>Id</td>
									<td>{{ $event->id }}</td>
								</tr>
								<tr>
									<td>Name</td>
									<td>{{ $event->name }}</td>
								</tr>
								<tr>
									<td>Description</td>
									<td>{{ $event->description }}</td>
								</tr>
								<tr>
									<td>Photo</td>
									<td>
										@if($event->photo)
										<img width="60" height="60" src="{{ asset('uploads/events/') . '/' . $event->photo }}" ></td>
										@else
											N/A
										@endif
									</td>
								</tr>
								
								<tr>
									<td>Status</td>
									<td>
										@if($event->status) 
											<button type="button" class="btn btn-sm btn-success">Active</button>
										@else
											<button type="button" class="btn btn-sm btn-danger">Inactive</button>
										@endif
									</td>
								</tr>

								<tr>
									<td>Created At</td>
									<td>{{ $event->created_at->toFormattedDateString() }}</td>
								</tr>

								<tr>
									<td>Updated At</td>
									<td>{{ $event->updated_at->toFormattedDateString() }}</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div><!-- /.panel-->
		</div><!--/ col-md-12 -->
		@include('admin.partials.copyright')
	</div><!--/ row -->
@endsection	
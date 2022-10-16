@extends('layouts.app')
@section('title') Page Show @stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="{{ url('/admin/users/create') }}">+Add New</a>
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
									<td>{{ $user->name }}</td>
								</tr>
								<tr>
									<td>Role</td>
									<td>{{ $user->role }}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>{{ $user->email }}</td>
								</tr>
								<tr>
									<td>Telephone</td>
									<td>{{ $user->telephone }}</td>
								</tr>
								<tr>
									<td>Address</td>
									<td>{{ $user->address }}</td>
								</tr>
								<tr>
									<td>City</td>
									<td>{{ $user->city }}</td>
								</tr>
								<tr>
									<td>State</td>
									<td>{{ $user->state }}</td>
								</tr>

								@if($user->country_id)
									<tr>
										<td>Country</td>
										<td>{{ $user->m_country->country_name }}</td>
									</tr>
								@endif
								
								<tr>
									<td>Postal Code</td>
									<td>{{ $user->postal_code }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><!-- /.panel-->
		</div><!--/ col-md-12 -->
	</div><!--/ row -->
@endsection	
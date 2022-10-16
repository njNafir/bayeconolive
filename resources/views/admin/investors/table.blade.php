<div class="table-responsive">
    <table class="table" id="investors-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>City</th>
        <th>Country</th>
        <th>Address</th>
        <th>Message Type</th>
        <th>Message Details</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($investors as $investor)
            <tr>
                <td>{{$investor->id}}</td>
                <td>{{ $investor->name }}</td>
            <td>{{ $investor->email }}</td>
            <td>{{ $investor->phone }}</td>
            <td>{{ $investor->city }}</td>
            <td>{{ $investor->country }}</td>
            <td>{{ $investor->address }}</td>
            <td>{{ $investor->message_type }}</td>
            <td>{{ $investor->message_details }}</td>
            <td>{!! $investor->status_buttons() !!}</td>
                <td>
                    {!! Form::open(['route' => ['admin.investors.destroy', $investor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.investors.show', [$investor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.investors.edit', [$investor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

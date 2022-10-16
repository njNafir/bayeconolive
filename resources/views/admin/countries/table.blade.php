<div class="table-responsive">
    <table class="table" id="countries-table">
        <thead>
            <tr>
                <th>Code</th>
        <th>Name</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($countries as $country)
            <tr>
                <td>{{ $country->code }}</td>
            <td>{{ $country->name }}</td>
            <td>{{ $country->status }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.countries.destroy', $country->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.countries.show', [$country->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @can('country-edit')
                        <a href="{{ route('admin.countries.edit', [$country->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('country-delete')
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

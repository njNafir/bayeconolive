<div class="table-responsive">
    <table class="table" id="permissions-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Guard Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
            <td>{{ $permission->guard_name }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.permissions.destroy', $permission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.permissions.show', [$permission->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @can('permission-edit')
                            <a href="{{ route('admin.permissions.edit', [$permission->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('permission-delete')
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

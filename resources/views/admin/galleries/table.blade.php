<div class="table-responsive">
    <table class="table" id="galleries-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
        <th>Image</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr>
                <td>{{$gallery->id}}</td>
                <td>{{ $gallery->name }}</td>
            <td>{!! $gallery->imageToShow('image') !!}</td>
            <td>{!! $gallery->status_buttons() !!}</td>
                <td>
                    {!! Form::open(['route' => ['admin.galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.galleries.show', [$gallery->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.galleries.edit', [$gallery->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

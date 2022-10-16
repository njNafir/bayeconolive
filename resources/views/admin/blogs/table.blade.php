<div class="table-responsive">
    <table class="table" id="blogs-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
        <th>Image</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{ $blog->title }}</td>
                <td>{!! $blog->imageToShow() !!}</td>
                <td>{!! $blog->status_buttons() !!}</td>
                <td>
                    {!! Form::open(['route' => ['admin.blogs.destroy', $blog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.blogs.show', [$blog->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {{-- @can('blog-edit') --}}
                            <a href="{{ route('admin.blogs.edit', [$blog->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{-- @endcan --}}
                        {{-- @can('blog-delete') --}}
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {{-- @endcan --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="partners-table">
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
        @foreach($partners as $partner)
            <tr>
                <td>{{$partner->id}}</td>
                <td>{{ $partner->name }}</td>
                <td>{!! $partner->imageToShow('image') !!}</td>
                <td>{!! $partner->status_buttons() !!}</td>
                <td>
                    {!! Form::open(['route' => ['admin.partners.destroy', $partner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.partners.show', [$partner->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.partners.edit', [$partner->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

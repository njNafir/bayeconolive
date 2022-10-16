<div class="table-responsive">
    <table class="table" id="members-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Intro</th>
                <th>Image</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($members as $member)
            <tr>
                <td>{{$member->id}}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->position }}</td>
                <td>{{ $member->intro }}</td>
                <td>{!! $member->imageToShow() !!}</td>
                <td>{!! $member->status_buttons() !!}</td>
                <td>
                    {!! Form::open(['route' => ['admin.members.destroy', $member->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.members.show', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.members.edit', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

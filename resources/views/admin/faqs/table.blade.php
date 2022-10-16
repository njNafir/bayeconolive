<div class="table-responsive">
    <table class="table" id="faqs-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faqs as $faq)
            <tr>
                <td>{{$faq->id}}</td>
                <td>{{ $faq->title }}</td>
            <td>{!! $faq->status_buttons() !!}</td>
                <td>
                    {!! Form::open(['route' => ['admin.faqs.destroy', $faq->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.faqs.show', [$faq->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admin.faqs.edit', [$faq->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

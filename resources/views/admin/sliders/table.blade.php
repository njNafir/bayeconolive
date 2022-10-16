<div class="table-responsive">
    <table class="table" id="sliders-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
        {{-- <th>Title Sub</th> --}}
        <th>Image</th>
        {{-- <th>Description</th>
        <th>Read More Title</th>
        <th>Read More Link</th> --}}
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sliders as $slider)
            <tr>
                <td>{{$slider->id}}</td>
                <td>{{ $slider->title }}</td>
            {{-- <td>{{ $slider->title_sub }}</td> --}}
            <td>{!! $slider->imageToShow('image') !!}</td>
            {{-- <td>{{ $slider->description }}</td>
            <td>{{ $slider->read_more_title }}</td>
            <td>{{ $slider->read_more_link }}</td> --}}
            <td>{!! $slider->status_buttons() !!}</td>
                <td>
                    {!! Form::open(['route' => ['admin.sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.sliders.show', [$slider->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {{-- @can('slider-edit') --}}
                            <a href="{{ route('admin.sliders.edit', [$slider->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{-- @endcan --}}
                        {{-- @can('slider-delete') --}}
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

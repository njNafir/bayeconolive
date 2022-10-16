<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }} setting-form-group-file">
    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    <input type="{{ $field['type'] }}"
           name="{{ $field['name'] }}"
           value="{{ old($field['name'], \setting($field['name'])) }}"
           class="form-control {{ Arr::get( $field, 'class') }}"
           id="{{ $field['name'] }}"
           placeholder="{{ $field['label'] }}">

     <div class="form-file-upload upload-{{ $field['name'] }}">
     	 <img style="max-width: 200px;" src="{{ asset('uploads/settings/') . '/' . old($field['name'], \setting($field['name'])) }}" alt="">
     	 {{-- <button class="btn btn-sm">Delete</button> --}}
     </div><!--end of form-file-upload upload- -->

    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
</div>
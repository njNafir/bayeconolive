<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>

    <textarea style="min-height: 100px;" name="{{ $field['name'] }}"
           class="form-control {{ Arr::get( $field, 'class') }}"
           id="{{ $field['name'] }}"
           placeholder="{{ $field['label'] }}">{{ old($field['name'], \setting($field['name'])) }}</textarea>

    @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
</div>
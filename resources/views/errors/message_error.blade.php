@if ($errors->has($var))
    <span class="help-block">
        <strong>{{ $errors->first($var) }}</strong>
    </span>
@endif
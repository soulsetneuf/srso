@if(!isset($class) )
    <?php $class="btn btn-success" ?>
@endif
<a href="{{ route($path_controller.'.'.$action) }}" class="{{ $class }}">{{ $text }}</a>
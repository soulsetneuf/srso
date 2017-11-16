<form class="form-horizontal" role="form" method="POST" action="{{ route($path_controller.'.'.$action, $id) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value='DELETE'>
    <button type="submit" class="{{$class}}" href="{{ route($path_controller.'.'.$action, $id) }}">
        <i class="{{$icon}}"></i>
    </button>
</form>


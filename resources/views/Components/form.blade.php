@props(['action', 'method', 'enctype'])
<form class="m-center" action="{{$action}}" method="{{$method}}" enctype="{{$file}}">
    @csrf
    {{$slot}}
</form>

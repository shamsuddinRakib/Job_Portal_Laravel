@props(['logo'=>'abc','width'=> 42])
{{--@dd(asset($logo))--}}
<img src="{{asset("storage/".$logo)}}" class="rounded-xl w-20" alt="img" >

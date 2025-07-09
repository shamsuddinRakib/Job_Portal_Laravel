@props(['type'=>'text', 'name', 'label', 'placeholder'])
<div class="my-6">
  <div class="flex items-center gap-2">
      <span class="w-2 h-2 inline-block bg-white"></span>
      <label class="text-sm font-bold">{{$label}}</label>
  </div>
    <div class="">
        <input class="w-full max-w-xl px-3 py-4 rounded-lg mt-2 bg-white/10" type="{{$type}}" name="{{$name}}" placeholder="{{$name}}">
    </div>
</div>


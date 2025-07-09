
@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group transition duration-300 ">

    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8 ">
        <h3 class="font-bold  group-hover:text-blue-600 text-xl">{{ $job->title }}</h3>
        <p class="text-sm mt-4">Full time - {{ $job->salary  }}</p>
    </div>
    <div>
        <div class="flex justify-between items-center mt-auto">
            <div class="">
                @foreach($job->tags as $tag)
                    <x-tag :tag="$tag"/>
                @endforeach


            </div>
            <div>
               <x-employer_logo :logo="$job->employer->logo"/>
            </div>
{{--            {{$job->employer->logo}}--}}

        </div>

        <div></div>
        <div></div>
    </div>

</div>

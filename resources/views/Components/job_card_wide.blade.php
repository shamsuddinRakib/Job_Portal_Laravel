@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex gap-6 border border-transparent hover:border-blue-800 group transition duration-800  ">
    <div>
        <x-employer_logo :width="100"/>
    </div>


    <div class=" flex-1 flex flex-col">
        <a href="" class="self-start text-sm text-gray-600">{{ $job->employer->name }}</a>
        <h3 class="font-bold  group-hover:text-blue-800 text-xl mt-3">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">Full time - from {{ $job->salary }}</p>
    </div>
    <div>
        @foreach($job->tags as $tag)
            <x-tag :tag="$tag"/>
        @endforeach
    </div>
    <div>
        <x-employer_logo :logo="$job->employer->logo"/>
    </div>


</div>



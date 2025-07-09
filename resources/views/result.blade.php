<x-layout>
    <div class="m-auto">
        <x-page_heading>Results :</x-page_heading>
    </div>


    <div class="space-y-6 mt-6 m-auto">
        @foreach($jobs as $job)
            <x-job_card_wide :job="$job"/>
        @endforeach

    </div>

</x-layout>

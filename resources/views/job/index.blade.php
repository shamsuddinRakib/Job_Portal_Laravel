{{-- so here x denotes that we are treating the following tag as non traditional html tag, it our custom tag to add a extra layer to our current page --}}

<x-layout >
    <div class="space-y-10">
        <section class="text-center pt-6">

            <h1 class="font-bold text-4xl ">Let's Find Your Next Job </h1>
            <form class="mt-6 " action="/search">
                <input name='search' type="text" placeholder="I'm looking for...." class="py-3 w-full max-w-xl px-4 bg-white/5 rounded-lg border border-white/10 ">
            </form>
        </section>

        <section class="pt-4">
            <x-section_heading> Featured Jobs  </x-section_heading>

            <div class="grid lg:grid-cols-3 gap-6  mt-6">
              @foreach($featured_jobs as $job)
                    <x-job_card :job="$job"/>
              @endforeach


            </div>

        </section>

        <section>
            <x-section_heading>Tags</x-section_heading>
            <div class="space-x-2 mt-6" >
                @foreach($tags as $tag)
                    <x-tag :tag="$tag"/>
                @endforeach


            </div>
        </section>

        <section>
            <x-section_heading> Recent Jobs </x-section_heading>
            <div class="space-y-6 mt-6">
                @foreach($jobs as $job)
                    <x-job_card_wide :job="$job"/>
                @endforeach

            </div>

        </section>
    </div>
</x-layout>

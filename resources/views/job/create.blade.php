<x-layout>
    <x-page_heading>Create New Job</x-page_heading>
    <div class="max-w-xl m-auto gap-10">
    <form class="m-auto" action="/jobs" method="POST">
        @csrf
        <x-input label="Title" name="title" placeholder="Web Developer"/>
        <x-input label="Salary" name="salary" placeholder="$60000"/>
        <x-input label="Location" name="location" placeholder="Florida, USA"/>
        <x-input label="URL" name="url" placeholder="exampleJob.com"/>
        <x-input label="Schedule" name="schedule" type="text" placeholder="full time"/>
        <x-input label="Featured" name="featured" type="number" placeholder="full time"/>

        <x-input label="Tags (Comma Separated)" name="tags" placeholder="python developer, web developer"/>


        <x-button>Publish</x-button>

    </form>
    </div>
</x-layout>

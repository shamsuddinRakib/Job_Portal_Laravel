<x-layout>
    <x-page_heading>Sign In to Your Account</x-page_heading>
    <div class="max-w-xl m-auto gap-10">
        <form action="/login" method="POST" >
            @csrf

            <x-input label="Email" type="text" name="email"/>
            <x-input label="Password" type="password" name="password"/>


            <x-button>Sign In</x-button>
        </form>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </div>

</x-layout>

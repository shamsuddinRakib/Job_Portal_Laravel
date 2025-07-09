<x-layout>
<x-page_heading>Register</x-page_heading>
    <div class="max-w-xl m-auto gap-10">
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <x-input label="Name" type="text" name="name"/>
                <x-input label="Email" type="text" name="email"/>
                <x-input label="Password" type="password" name="password"/>
                <x-input label="Confirm Password" type="password" name="password_confirmation"/>
                <hr class="my-10 "/>

                <x-input label="Employer Name" type="text" name="employer_name"/>
                <x-input label="Employer Logo" type="file" name="logo"/>

                <x-button>Create Account</x-button>
            </form>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </div>

</x-layout>

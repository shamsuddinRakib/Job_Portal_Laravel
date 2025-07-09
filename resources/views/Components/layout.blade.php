<!DOCTYPE html>
<html lang="en" class=" bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job listing app</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-[100vh] bg-black text-white pb-20">

<div class="px-10">

    <nav class="flex justify-between items-center py-4 border-b border-white/10">

        {{--            logo--}}
        <div>
            <a href="/"> <img src="https://picsum.photos/30/30" alt="logo" ></a>

        </div>
        {{--            nav links--}}
        <div class="space-x-5 font-bold  ">
            <a href="/">Jobs</a>
            <a href="">Careers</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>
        @auth
        <div class="flex space-x-4">
            <a href="/jobs/create" class="border border-white/10 hover:border-blue-800 px-2 py-2 rounded-lg transition duration-800">Post a Job</a>
            <form action="/logout" method="POST">
                @csrf
                @method('DELETE')
            <button class="bg-white/10 px-2 py-2 rounded-lg  hover:bg-white/80 hover:text-black transition duration-300">Logout</button>
            </form>
        </div>
        @endauth

        @guest
            <div class="space-x-5 font-bold  ">
                <a href="/register">Sign Up</a>
                <a href="/login">Login</a>

            </div>
        @endguest

    </nav>

    <main class="max-w-[986px] mt-5 m-auto">
        {{$slot}}
    </main>
</div>


</body>

</html>

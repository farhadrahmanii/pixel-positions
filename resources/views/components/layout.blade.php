<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="pb-10 text-white bg-black">

    <div class="px-10">
        <nav class="flex items-center justify-between py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="logo" />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href=""> companies</a>
            </div>
            @auth
                <div>
                    <a href="/jobs/create"> Post Job</a>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot}}
        </main>
    </div>

</body>

</html>
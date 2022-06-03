<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body">

    {{-- Nav --}}
    <nav class="flex justify-between">
        <a href="/" class="w-20">
            <img src="{{ asset('images/logo.png') }}" class="object-contain" alt="logo-png">
        </a>

        <ul class="flex items-center space-x-6 pr-6 text-md">
            <li>
                <a href="#" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="#" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="h-28 flex flex-col justify-center items-center justify-between bg-laravel p-4 mt-8 opacity-90 md:flex-row">
        <div class="text-white font-bold">
            Copyright &copy; 2022, All Rights reserved
        </div>

        <div>
            <a href="#" class="inline-block text-white font-bold bg-stone-900 py-2 px-4 my-4">
                Post Job
            </a>
        </div>
    </footer>
</body>

</html>

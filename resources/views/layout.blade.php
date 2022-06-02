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

<body class="mb-48">

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

    {{-- Hero --}}
    <section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center my-4">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
            style="background-image: url('images/laravel-logo.png')">
        </div>

        <div class="z-10">
            <h1 class="text-6xl font-bold text-white uppercase">lare<span class="text-black">gigs</span></h1>

            <p class="text-2xl py-4 font-bold text-gray-200">Find or post Laravel jobs & projects</p>

            <div class="my-2">
                <a href="#" class="inline-block border-2 py-2 px-4 rounded-xl text-white uppercase cursor-pointer hover:text-black hover:border-black">sign up to list a gig</a>
            </div>
        </div>
        

    </section>

    @yield('content')
</body>

</html>

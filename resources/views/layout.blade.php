<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="font-roboto">
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

</body>

</html>

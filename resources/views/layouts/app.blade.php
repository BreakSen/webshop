<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
      <script src="https://cdn.tailwindcss.com"></script>
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-sans antialiased">
      <div class="min-h-screen bg-gray-100">
          @include('layouts.navigation')

          <!-- Page Heading -->
          @if (isset($header))
              <header class="bg-white shadow">
                  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                      {{ $header }}
                  </div>
              </header>
          @endif

          <!-- Page Content -->
          <main>
              <div>
              @yield('body')
              </div>
          </main>
      </div>
  </body>
{{-- <!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <header>
     <nav class="flex items-center justify-between bg-neutral-400">
      <a href="/">
        <img src="{{ URL('images/logo.png') }}" class= "w-24 h-24" alt="Magic Webstore Logo"/>
    </a>
        <div class="flex items-center">
          <a href="/" class="fas fa-home text-[#8f763f] px-3 py-2 mr-2"></a>
          <a href="#" class="fas fa-shopping-cart text-[#8f763f] px-3 py-2 mr-2"></a>
        </div>
      </nav>
    </header>
    @yield('navbar')--}}
<footer class="p-2 bg-neutral-400 text-[#8f763f]" style="display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-end;">
  <div class="container mx-auto">
    <div class="grid grid-cols-2 gap-4">
      <div>
        <h3 class="text-lg font-medium mb-2">Contact Us</h3>
        <p class="text-[796707]">
          Shop postcode.<br>
          city, land<br>
          555-555-5555
        </p>
      </div>
    </div>
  </div>
</footer>
@yield('footer')
</html>
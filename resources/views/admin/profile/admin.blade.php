<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title')</title>
    
    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="http://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet"  type="text/css">
    
    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
        <div class="container">
          <a class="navbar-brand" hrtf="{{ url('/') }}">
            {{ config('app.name','Laravel') }}
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expaded="false" aria-label="Toggle nabigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSapportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              
            </ul>
            <ul class="navbar-nav ml-auto">
            
            <!-- Right Side Of Navbar -->  
            </ul>
          </div>
        </div>
      </nav>
      
      <main class="py-4">
        @yield('content')
      </main>
    </div>
  </body>
</html>
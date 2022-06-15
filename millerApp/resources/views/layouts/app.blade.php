<!DOCTYPE html>
<html>
<head>
          <livewire:styles />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    </head>

    <body>
        <div class="container m-2">
           <h1>@yield('title')</h1>
       
                <div class="container mt-1">
                   @yield('content')
                   {{$slot}}
                </div>
            
        </div>
        <livewire:scripts />
    </body>
</html>

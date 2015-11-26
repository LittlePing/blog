
<!-- 存放在 resources/views/photo/new.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
    <div class="header">
            This is the master sidebar.
    </div>
            @section('sidebar')
            This is the container.
             @show
    <div class="container">
              @yield('content')
    </div>
     <div class="footer">
        Copyright @2015-2055 laravelacademy
     </div>
    </body>
</html>



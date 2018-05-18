<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('includes.sidebar')

        @yield('content')

        <footer>
            @include('layouts.footer')
        </footer>
    </body>      
</html>    
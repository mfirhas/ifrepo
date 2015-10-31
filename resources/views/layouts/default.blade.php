<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        <!--@include('includes.header')-->
        @include('includes.navigation')
    </header>

    <div id="main" class="row">
            @include('includes.content')
            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include("Main::includes.head")
    </head>

    <body data-layout-mode="light">

        @include("Main::includes.navbar")
        @include("Main::includes.sidebar")

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    @include("Main::widgets.message.alert")

                    {{-- page content --}}
                    @yield('content')
 
                    @include("Main::includes.footer")
                    <!-- end main content-->
                </div>
            </div>
        </div>

        @include("Main::includes.scripts")

    </body>
</html>

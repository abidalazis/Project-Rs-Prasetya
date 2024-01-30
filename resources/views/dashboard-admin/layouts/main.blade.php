<!DOCTYPE html>
<html lang="en">
@include('dashboard.layouts.header')
    <body class="sb-nav-fixed">
        @include('dashboard.layouts.topbar')
        <div id="layoutSidenav">
            @include('dashboard.layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                @include('dashboard.layouts.footer')
            </div>
        </div>
        @include('dashboard.layouts.script')
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
@include('laporan.layouts.header')
    <body class="sb-nav-fixed">
        @include('laporan.layouts.topbar')
        <div id="layoutSidenav">
            @include('laporan.layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                @include('laporan.layouts.footer')
            </div>
        </div>
        @include('laporan.layouts.script')
    </body>
</html>

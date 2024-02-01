<!DOCTYPE html>
<html lang="en">
@include('dashboard-admin.layouts.header')
    <body class="sb-nav-fixed">
        @include('dashboard-admin.layouts.topbar')
        <div id="layoutSidenav">
            @include('dashboard-admin.layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                @include('dashboard-admin.layouts.footer')
            </div>
        </div>
        @include('dashboard-admin.layouts.script')
    </body>
</html>

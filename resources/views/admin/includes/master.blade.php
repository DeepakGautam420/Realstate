<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    @yield('style-area')
</head>

<body class="alt-menu sidebar-noneoverflow">
    @include('admin.includes.topbar')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>
        @include('admin.includes.sidebar')
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    @yield('content-area')
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTAINER -->
    @include('admin.includes.foot')
    @yield('script-area')
</body>

</html>
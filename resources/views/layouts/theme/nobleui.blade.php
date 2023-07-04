<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Input Type - Admin</title>

    @include('layouts.theme.styles')
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">

        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.theme.sidebar')
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:../../partials/_navbar.html -->
            @include('layouts.theme.navbar')
            <!-- partial -->

            <div class="page-content">
                @yield('content')
            </div>

            @include('layouts.theme.footer')

        </div>
    </div>

    @include('layouts.theme.scripts')
</body>

</html>

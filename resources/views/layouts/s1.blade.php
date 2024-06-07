<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('s1.layout.head')

<body class="@yield('class_body', 'template-index')">

<div class="page-wrapper">
    @include('s1.layout.header')

    <div id="page-content">
        @yield('top_content')

        @yield('content')
    </div>

</div>
<!--End Page Wrapper-->

@include('s1.layout.footer')

@include('s1.layout.scripts')
@stack('custom_script')
</body>
</html>

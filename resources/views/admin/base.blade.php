<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/element-plus/2.3.4/index.min.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/layui/2.8.3/css/layui.min.css">
    @yield('head')
</head>

<body>
    @yield('content')
    <script src="https://cdn.staticfile.org/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/layui/2.8.3/layui.min.js"></script>
    <script src="https://cdn.staticfile.org/vue/3.3.2/vue.global.js"></script>
    {{-- <script src="https://cdn.staticfile.org/vue/3.3.2/vue.global.prod.min.js"></script> --}}
    <script src="https://cdn.staticfile.org/axios/1.4.0/axios.min.js"></script>
    <script src="https://cdn.staticfile.org/element-plus/2.3.4/index.full.min.js"></script>
    {{-- <script src="//unpkg.com/@element-plus/icons-vue"></script> --}}
    <script src="https://cdn.staticfile.org/element-plus-icons-vue/2.1.0/index.iife.min.js"></script>
    <script src="/assets/axios.js"></script>
    <script src="/assets/common.js"></script>
    @yield('script')
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="/pear/component/pear/css/pear.css" rel="stylesheet" />
    <link href="/pear/admin/css/other/error.css" rel="stylesheet" />
</head>

<body>
    <div class="content">
        <img src="/pear/admin/images/403.svg" alt="">
        <div class="content-r">
            <h1>403</h1>
            <p>抱歉，你无权访问该页面</p>
            <button class="pear-btn pear-btn-primary" onclick="home()">返回首页</button>
        </div>
    </div>
    <script src="/pear/component/layui/layui.js"></script>
    <script src="/pear/component/pear/pear.js"></script>
    <script>
        function home() {
            window.location.href = '{{ route(config('customize.namePrefix') . 'index') }}'
        }
    </script>
</body>

</html>

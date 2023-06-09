<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>登录</title>
    <!-- 样 式 文 件 -->
    <link rel="stylesheet" href="/static/pear/component/pear/css/pear.css" />
    <link rel="stylesheet" href="/static/pear/admin/css/other/login.css" />
</head>
<!-- 代 码 结 构 -->

<body background="/static/pear/admin/images/background.svg" style="background-size: cover;">
    <form class="layui-form" action="javascript:void(0);">
        <div class="layui-form-item">
            <img class="logo" src="/static/pear/admin/images/logo.png" />
            <div class="title">登陆页面</div>
            <div class="desc">
                {{-- 明 湖 区 最 具 影 响 力 的 设 计 规 范 之 一 --}}
            </div>
        </div>
        <div class="layui-form-item">
            <input placeholder="账 户 : admin " lay-verify="required" hover class="layui-input" />
        </div>
        <div class="layui-form-item">
            <input placeholder="密 码 : admin " lay-verify="required" hover class="layui-input" />
        </div>
        <div class="layui-form-item">
            <input placeholder="验证码 : " hover lay-verify="required" class="code layui-input layui-input-inline" />
            <img src="/static/pear/admin/images/captcha.gif" class="codeImage" />
        </div>
        <div class="layui-form-item">
            <input type="checkbox" name="" title="记住密码" lay-skin="primary" checked>
        </div>
        <div class="layui-form-item">
            <button type="button" class="pear-btn pear-btn-success login" lay-submit lay-filter="login">
                登 入
            </button>
        </div>
    </form>
    <!-- 资 源 引 入 -->
    <script src="/static/pear/component/layui/layui.js"></script>
    <script src="/static/pear/component/pear/pear.js"></script>
    <script>
        let loginPath = {{ Js::from($loginPath) }}
        layui.use(['form', 'button', 'popup'], function() {
            var form = layui.form;
            var button = layui.button;
            var popup = layui.popup;

            // 登 录 提 交
            form.on('submit(login)', function(data) {

                /// 验证

                /// 登录

                /// 动画
                button.load({
                    elem: '.login',
                    time: 1500,
                    done: function() {
                        popup.success("登录成功", function() {
                            location.href = loginPath
                        });
                    }
                })
                return false;
            });
        })
    </script>
</body>

</html>

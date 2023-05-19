@extends('admin.base')
@section('content')
    <div id="page">
        <div class="layui-body" style="left: 0px">
            <!-- 内容主体区域 -->
            <div style="padding: 15px;">
                <blockquote class="layui-elem-quote layui-text">
                    @yield('layui-body-quote')
                </blockquote>
                <div class="layui-card layui-panel">
                    <div class="layui-card-header">
                        @yield('layui-body-header')
                    </div>
                    <div class="layui-card-body">
                        @yield('layui-body-body')
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
@endsection

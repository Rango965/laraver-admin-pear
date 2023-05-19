@extends('admin.layui')
{{-- layui-body-quote --}}
{{-- layui-body-header --}}
{{-- layui-body-body --}}
@section('layui-body-quote')
    字典管理
@endsection
@section('layui-body-header')
    字典列表
@endsection
@section('layui-body-body')
    <table class="layui-hide" id="dict-list"></table>
@endsection
@section('script')
    <script>
        let listPath = {{ Js::from($listPath) }}
        layui.use(['treeTable', 'layer'], function() {
            var treeTable = layui.treeTable;
            var layer = layui.layer;
            // 渲染
            var inst = treeTable.render({
                elem: '#dict-list',
                url: listPath,
                cols: [
                    [{
                            type: 'checkbox',
                            fixed: 'left'
                        },
                        {
                            field: 'id',
                            title: 'ID',
                        },
                        {
                            field: 'name',
                            title: '用户名',
                        },
                    ]
                ],
                page: true
            });
        });
    </script>
@endsection

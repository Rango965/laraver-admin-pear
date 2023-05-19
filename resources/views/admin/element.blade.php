@extends('admin.base')
@section('content')
    <div id="page">
        <el-container>
            <el-main>
                {{-- main位置占位符 --}}
                @yield('main')
            </el-main>
        </el-container>
    </div>
@endsection

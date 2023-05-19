<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    IndexController,
    LoginController,
    CommonController,
};

$namePrefix = config('admin.namePrefix');

// 后台首页
Route::get('/', [IndexController::class, 'index'])->name($namePrefix . 'index');
// 登录页面
Route::get('/login', [LoginController::class, 'index'])->name($namePrefix . 'login');

// 公共管理
Route::prefix('common')
    ->name($namePrefix . 'common.')
    ->group(function () {
        // 配置页面
        Route::any('/config', [CommonController::class, 'config'])->name('config');
        // 菜单列表
        Route::any('/menu', [CommonController::class, 'menu'])->name('menu');
        // 消息列表
        Route::any('/message', [CommonController::class, 'message'])->name('message');
    });

// 系统管理
Route::prefix('system')
    ->name($namePrefix . 'system.')
    ->group(function () {
        Route::prefix('user')
            ->name('user.')
            ->controller(App\Http\Controllers\Admin\System\UserController::class)
            ->group(function () {
                // 用户列表
                Route::any('/index', 'index')->name('index');
            });
        Route::prefix('dict')
            ->name('dict.')
            ->controller(App\Http\Controllers\Admin\System\DictController::class)
            ->group(function () {
                Route::any('/index', 'index')->name('index');
                Route::any('/list', 'list')->name('list');
            });
    });

// 错误路由
Route::fallback(function () {
    // return view('admin.errors.403');
    return view('admin.errors.404');
    // return view('admin.errors.500');
});

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAdminLogin;

class AdminController extends Controller
{
    public string $namePrefix;
    public Request $request;
    public function __construct(Request $request)
    {
        // 控制器中间件
        $this->middleware(CheckAdminLogin::class);

        $this->request = $request;
        $this->namePrefix = config('admin.namePrefix');
    }
}

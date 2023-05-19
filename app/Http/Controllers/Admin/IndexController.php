<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class IndexController extends AdminController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function index()
    {
        $data = [
            // 配置路径
            'configPath' => route($this->namePrefix . 'common.config'),
            // 登录路径
            'loginPath' => route($this->namePrefix . 'login'),
        ];
        return view('admin.index', $data);
    }
}

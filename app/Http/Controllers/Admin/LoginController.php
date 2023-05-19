<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public Request $request;
    public string $namePrefix;
    public function __construct(Request $request)
    {
        $this->$request = $request;
        $this->namePrefix = config('admin.namePrefix');
    }
    public function index()
    {
        $data = [
            'loginPath' => route($this->namePrefix . 'login')
        ];
        return view('admin.login', $data);
    }
}

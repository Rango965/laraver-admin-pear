<?php

namespace App\Http\Controllers\Admin\System;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;

class DictController extends AdminController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    /**
     * 用户列表首页
     */
    public function index()
    {
        $data = [
            'listPath' => route($this->namePrefix . 'system.dict.list'),
        ];
        return view('admin.system.dict.index', $data);
    }

    public function list()
    {
        $data = [
            [
                "id" => 1,
                "name" => "User-1",
                "parentId" => 0,
                "isParent" => true,
                "children" => [
                    [
                        "id" => 2,
                        "name" => "User-2",
                        "isParent" => true,
                        "parentId" => 1,
                        "children" => [
                            [
                                "id" => 3,
                                "name" => "User-3",
                                "parentId" => 2,
                                "isParent" => false,
                            ],
                            [
                                "id" => 7,
                                "name" => "User-7",
                                "parentId" => 2,
                                "isParent" => true,
                                "children" => [
                                    [
                                        "id" => 8,
                                        "name" => "User-8",
                                        "parentId" => 7,
                                        "isParent" => false
                                    ]
                                ],
                            ]
                        ],
                    ]
                ],
            ],
        ];
        return [
            'code' => 0,
            'msg' => "",
            'data' => $data,
            'count' => count($data),
        ];
    }
}

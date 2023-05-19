<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class CommonController extends AdminController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function config()
    {
        $namePrefix = config('admin.namePrefix');
        $logo = "/static/pear/admin/images/logo.png";
        $config = [
            // title : 网站名称
            // image : 网站图标
            "logo" => [
                "title" => "管理后台",
                "image" => $logo,
            ],
            // collapse: 侧边的默认状态
            // data : 菜单数据
            // method: 请求方式 GET / POST
            // accordion : 是否开启菜单手风琴
            // control : 菜单模式 false 为常规菜单，true 为多系统菜单
            // controlWidth : 顶部菜单的宽度，单位 Px
            // select : 默认选中菜单项 (ID)
            // async: 渲染模式，true 为异步接口的方式, false 为静态数据
            "menu" => [
                "data" => route($this->namePrefix . 'common.menu'),
                "method" => "GET",
                "accordion" => true,
                "collapse" => false,
                "control" => false,
                "controlWidth" => 500,
                "select" => "182",
                "async" => true
            ],
            // enable : 是否开启多标签页
            // keepState : 选项卡切换时，是否刷新页面
            // max : 最大打开标签页数量
            // index: 主页初始化数据
            // session: 存储记忆，刷新浏览器时是否保持打开 Tab
            "tab" => [
                "enable" => true,
                "keepState" => true,
                "session" => false,
                "preload" => false,
                "max" => "30",
                "index" => [
                    "id" => "system_user",
                    "href" => route($namePrefix . 'system.user.index'),
                    "title" => "用户管理"
                ]
            ],
            // defaultColor : 默认主题色
            // defaultHeader: 默认顶部主题
            // defaultMenu : 默认菜单主题 (dark-theme / light-theme)
            // allowCustom : 是否允许自定义主题，为 false 时，强制使用配置主题
            // banner: 通栏布局
            "theme" => [
                "defaultColor" => "2",
                "defaultMenu" => "dark-theme",
                "defaultHeader" => "light-theme",
                "allowCustom" => true,
                "banner" => false
            ],
            // id : 编号
            // color: 主题颜色
            // second: 辅助颜色
            "colors" => [
                [
                    "id" => "1",
                    "color" => "#2d8cf0",
                    "second" => "#ecf5ff"
                ],
                [
                    "id" => "2",
                    "color" => "#36b368",
                    "second" => "#f0f9eb"
                ],
                [
                    "id" => "3",
                    "color" => "#f6ad55",
                    "second" => "#fdf6ec"
                ],
                [
                    "id" => "4",
                    "color" => "#f56c6c",
                    "second" => "#fef0f0"
                ],
                [
                    "id" => "5",
                    "color" => "#3963bc",
                    "second" => "#ecf5ff"
                ]
            ],
            // keepLoad : 主页动画加载时长
            // autoHead : 顶部颜色跟随主题
            "other" => [
                "keepLoad" => "50",
                "autoHead" => false,
                "footer" => false
            ],
            "header" => [
                "message" => route($this->namePrefix . 'common.message')
            ]
        ];
        return $config;
    }

    public function menu()
    {
        $namePrefix = config('admin.namePrefix');
        $menus = [
            [
                "id" => "system",
                "title" => "系统管理",
                "icon" => "layui-icon layui-icon-set-fill",
                "type" => 0,
                "href" => "",
                "auth" => "system",
                "children" => [
                    [
                        "id" => "system_user",
                        "title" => "用户管理",
                        "icon" => "",
                        "type" => 1,
                        "openType" => "_iframe",
                        "href" => route($namePrefix . 'system.user.index'),
                        "auth" => "system",
                    ],
                    [
                        "id" => "system_dict",
                        "title" => "数据字典",
                        "icon" => "",
                        "type" => 1,
                        "openType" => "_iframe",
                        "href" => route($namePrefix . 'system.dict.index'),
                        "auth" => "system",
                    ]
                ]
            ],
        ];
        return $menus;
    }

    public function message()
    {
        $message = [
            [
                "id" => 1,
                "title" => "通知",
                "children" => []
            ],
            [
                "id" => 2,
                "title" => "消息",
                "children" => []
            ],
            // [
            //     "id" => 3,
            //     "title" => "代办",
            //     "children" => []
            // ],
        ];
        return $message;
    }
}

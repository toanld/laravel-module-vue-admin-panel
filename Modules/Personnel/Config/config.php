<?php

return [
    'name' => 'Personnel',
    'prefix' => 'personnel',
    'menu' =>[
        [
            "name" => 'Hồ sơ nhân sự',
            "uri" => "<nolink>",
            "icon" => 'icon-contact-card',
            "link" => "",
            'summary' => 'Nhân sự',
            'text' => "list-personnel",
            "children" => [
                [
                    "name" => "Tất cả",
                    "uri" => "/personnel",
                    "link" => "/personnel"
                ],
                [
                    "name" => "Đang làm việc",
                    "uri" => "/personnel/create",
                    "link" => "/personnel/create"
                ],
                [
                    "name" => "Nghỉ tạm thời",
                    "uri" => "/personnel/create",
                    "link" => "/personnel/create"
                ],
                [
                    "name" => "Cập nhật thông tin",
                    "uri" => "/personnel/create",
                    "link" => "/personnel/create"
                ],
                [
                    "name" => "Được cấp chứ ký số",
                    "uri" => "/personnel/create",
                    "link" => "/personnel/create"
                ],
                [
                    "name" => "Nghỉ việc",
                    "uri" => "/personnel/out",
                    "link" => "/personnel/out"
                ],

            ]
        ],
        [
            "name" => 'Hợp đồng lao động',
            "uri" => "<nolink>",
            "icon" => 'icon-contract-job',
            "link" => "",
            'summary' => 'Hợp đồng',
            'text' => "personnel-contract-contract",
            "children" => [
                [
                    "name" => "Loại hợp đồng",
                    "uri" => "/personnel-contract-contract",
                    "link" => "/personnel-contract-contract"
                ],
                [
                    "name" => "Trạng thái",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status"
                ],
                [
                    "name" => "Hợp đồng ký số",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status"
                ]
            ]
        ],
        [
            "name" => 'Bảo hiểm',
            "uri" => "<nolink>",
            "icon" => 'icon-hospital-3',
            "link" => "",
            'summary' => 'Bảo hiểm',
            'summary' => 'Bảo hiểm',
            'text' => "personnel-insurance-insurance",
            "children" => [
                [
                    "name" => "Tất cả",
                    "uri" => "/personnel-insurance-insurance",
                    "link" => "/personnel-insurance-insurance"
                ],
                [
                    "name" => "Tăng dự kiên",
                    "uri" => "/personnel-insurance-insurance?menu=up",
                    "link" => "/personnel-insurance-insurance?menu=up"
                ],
                [
                    "name" => "Giảm dự kiến",
                    "uri" => "/personnel-insurance-insurance?menu=down",
                    "link" => "/personnel-insurance-insurance?menu=down"
                ],
                [
                    "name" => "Lịch sử đóng",
                    "uri" => "/personnel-insurance-insurance/report-history",
                    "link" => "/personnel-insurance-insurance/report-history"
                ]
            ]
        ],
        [
            "name" => 'Quyết định',
            "uri" => "/personnel-bonus-decision",
            "icon" => 'icon-gift',
            "link" => "/personnel-bonus-decision",
            'summary' => 'Quyết định',
            'text' => "personnel-bonus-decision",
            "children" => []
        ],
        [
            "name" => 'Báo cáo',
            "uri" => "/personnel-report-report",
            "icon" => 'icon-pie-chart',
            "link" => "/personnel-report-report",
            'summary' => 'Báo cáo',
            'text' => "personnel-report-report",
            "children" => []
        ],

    ],
    'menutop' => [
        [
            "name" => 'Hồ sơ nhân sự',
            "uri" => "/personnel",
            "icon" => 'mdiChartPieOutline',
            "link" => "/personnel",
            'summary' => 'Nhân sự',
            'text' => "personnel",
            "children" => []
        ],
        [
            "name" => 'Hợp đồng lao động',
            "uri" => "/personnel-report-report",
            "icon" => 'mdiFileSyncOutline',
            "link" => "/personnel-report-report",
            'summary' => 'Hợp đồng',
            'text' => "personnel-report-report",
            "children" => []
        ],
        [
            "name" => 'Quyết định',
            "uri" => "/personnel-bonus-decision",
            "icon" => 'mdiGiftOutline',
            "link" => "/personnel-bonus-decision",
            'summary' => 'Quyết định',
            'text' => "personnel-bonus-decision",
            "children" => []
        ],

    ],
    'menuapp' => [
         [
            "name" => 'Menu',
            "uri" => "<nolink>",
            "icon" => 'icon-xbox-menu',
            "link" => "",
            "class" => "",
            'summary' => 'Menu',
            'text' => "list-menu",
            "children" => true
        ],
        [
            "name" => 'Trang chủ',
            "uri" => "<nolink>",
            "icon" => 'icon-home',
            "link" => "",
            "class" => "",
            'summary' => 'home',
            'text' => "home",
            "children" => false
        ],
        [
            "name" => 'Tạo mới',
            "uri" => "<nolink>",
            "icon" => 'icon-plus-circle',
            "link" => "",
            "class" => 'text-main',
            'summary' => 'home',
            'text' => "home",
            "children" => false
        ],
        [
            "name" => 'Cá nhân',
            "uri" => "<nolink>",
            "icon" => 'icon-gender-neutral-user',
            "logo" => '',
            "link" => "",
            "class" => "",
            'summary' => 'user',
            'text' => "user",
            "children" => true
        ],
    ]
];

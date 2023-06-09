<?php

return [
    'name' => 'Personnel',
    'menu' =>[
        [
            "name" => 'Danh sách nhân sự',
            "uri" => "<nolink>",
            "icon" => 'mdiCardAccountDetailsOutline',
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
            "icon" => 'mdiFileSyncOutline',
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
            "icon" => 'mdiPlusBoxOutline',
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
            "icon" => 'mdiCardAccountDetailsOutline',
            "link" => "/personnel-bonus-decision",
            'summary' => 'Quyết định',
            'text' => "personnel-bonus-decision",
            "children" => []
        ],
        [
            "name" => 'Báo cáo',
            "uri" => "/personnel-report-report",
            "icon" => 'mdiChartPieOutline',
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

    ]
];

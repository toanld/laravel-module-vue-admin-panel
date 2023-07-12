<?php

return [
    'name' => 'module',
    'menu' =>[
        [
            "name" => 'Workplace',
            "uri" => "<nolink>",
            "icon" => '',
            "link" => "",
            'summary' => '',
            'text' => "workplace",
            "children" => [
                [
                    "name" => "Mạng nội bộ",
                    "uri" => "/personnel",
                    "link" => "/personnel",
                    "text" => "Truyền thông và văn hóa doanh nghiệp",
                    "icon" => "mdiEarth",
                    "color" => "color: rgb(32, 175, 255); background: rgba(32, 175, 255, 0.08);"
                ],
                [
                    "name" => "Tài liệu",
                    "uri" => "/personnel/create",
                    "link" => "/personnel/create",
                    "text" => "Lưu trữ, chia sẻ và quản lý tài liệu",
                    "icon" => "mdiBookOpenPageVariantOutline",
                    "color" => "color: rgb(110, 98, 255); background: rgba(110, 98, 255, 0.08);"
                ],
                [
                    "name" => "Công việc",
                    "uri" => "/personnel/create",
                    "link" => "/personnel/create",
                    "text" => "Giao việc, giám sát và đánh giá kết quả",
                    "icon" => "mdiBagChecked",
                    "color" => "color: rgb(32, 175, 255); background: rgba(32, 175, 255, 0.08);"
                ],
                [
                    "name" => "Dự án",
                    "uri" => "/personnel/create",
                    "link" => "/personnel/create",
                    "text" => "Quản lý tiến độ, nhân lực, dòng tiền dự án",
                    "icon" => "mdiMonitorEdit",
                    "color" => "color: rgb(21, 200, 114);"
                ],
                [
                    "name" => "Quy trình",
                    "uri" => "/personnel/create",
                    "link" => "/personnel/create",
                    "text" => "Số và Tự động hóa 100% quy trình",
                    "icon" => "mdiTransitConnectionVariant",
                    "color" => "color: rgb(251, 175, 26); background: rgba(251, 175, 26, 0.08);"
                ],
                [
                    "name" => "Văn bản",
                    "uri" => "/personnel/out",
                    "link" => "/personnel/out",
                    "text" => "Quản lý công văn đi, đến, nội bộ",
                    "icon" => "mdiCalendarTextOutline",
                    "color" => "color: rgb(21, 200, 114); background: rgba(21, 200, 114, 0.08);"
                ],
                [
                    "name" => "Lịch biểu",
                    "uri" => "/personnel/out",
                    "link" => "/personnel/out",
                    "text" => "Lich làm việc công ty, phòng ban",
                    "icon" => "mdiClipboardTextClockOutline",
                    "color" => "color: rgb(242, 65, 65); background: rgba(242, 65, 65, 0.08);"
                ],
                [
                    "name" => "Ký số",
                    "uri" => "/personnel/out",
                    "link" => "/personnel/out",
                    "text" => "Quy trình tạo hồ sơ, trình và ký số",
                    "icon" => "mdiLeadPencil",
                    "color" => "color: rgb(110, 98, 255); background: rgba(110, 98, 255, 0.08);"
                ],
                [
                    "name" => "Wiki",
                    "uri" => "/personnel/out",
                    "link" => "/personnel/out",
                    "text" => "Kho trí thức nội bộ",
                    "icon" => "mdiAccount",
                    "color" => "color: rgb(255, 0, 0); background: rgba(255, 0, 0, 0.08);"
                ]

            ]
        ],
        [
            "name" => 'HRM',
            "uri" => "<nolink>",
            "icon" => '',
            "link" => "",
            'summary' => '',
            'text' => "HRM",
            "children" => [
                [
                    "name" => "Đơn từ",
                    "uri" => "/personnel-contract-contract",
                    "link" => "/personnel-contract-contract",
                    "text" => "Số hóa đơn từ và quy trình duyệt",
                    "icon" => "mdiNoteOutline",
                    "color"=> "color: rgb(32, 175, 255); background: rgba(32, 175, 255, 0.08);"
                ],
                [
                    "name" => "Tài sản",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status",
                    "text" => "Thông tin, quá trình sử dụng tài sản",
                    "icon" => "mdiLaptop",
                    "color" => "color: rgb(251, 175, 26); background: rgba(251, 175, 26, 0.08);"
                ],
                [
                    "name" => "Tuyển dụng",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status",
                    "text" => "Xây dựng, quản lý quy trình tuyển dụng",
                    "icon" => "mdiAccountPlus",
                    "color" => "color: rgb(21, 200, 114); background: rgba(21, 200, 114, 0.08);"
                ],
                [
                    "name" => "Nhân sự",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status",
                    "text" => "Hồ sơ, hợp đồng, bảo hiểm nhân sự",
                    "icon" => "mdiAccountSupervisor",
                    "color" => "color: rgb(242, 65, 65); background: rgba(242, 65, 65, 0.08);"
                ],
                [
                    "name" => "Chấm công",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status",
                    "text" => "Quản lý công phép, làm thêm, nghỉ bù",
                    "icon" => "mdiCheckboxMarkedCircleOutline",
                    "color"=> "color: rgb(110, 98, 255); background: rgba(110, 98, 255, 0.08);"
                ],
                [
                    "name" => "Bảng lương",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status",
                    "text" => "Tính và trả lương trực tiếp qua VPBank",
                    "icon" => "mdiCurrencyUsd",
                    "color" => "color: rgb(32, 175, 255); background: rgba(32, 175, 255, 0.08);"
                ],
                [
                    "name" => "Đánh giá",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status",
                    "text" => "Quản lý đánh giá định kỳ nhân sự",
                    "icon" => "mdiFormatListChecks",
                    "color" => "color: rgb(21, 200, 114); background: rgba(21, 200, 114, 0.08);"
                ],
                [
                    "name" => "KPI và OKR",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status",
                    "text" => "Quản lý mục tiêu và chỉ tiêu KPI",
                    "icon" => "mdiFinance",
                    "color" => "color: rgb(251, 175, 26); background: rgba(251, 175, 26, 0.08);"
                ],
                [
                    "name" => "Đào tạo",
                    "uri" => "/personnel-contract-contract?menu=status",
                    "link" => "/personnel-contract-contract?menu=status",
                    "text" => "Quản lý các khóa đào tạo nội bộ",
                    "icon" => "mdiSchool",
                    "color" => "color: rgb(21, 200, 114); background: rgba(21, 200, 114, 0.08);"
                ]
            ]
        ],
        [
            "name" => 'CRM',
            "uri" => "<nolink>",
            "icon" => '',
            "link" => "",
            'summary' => 'CRM',
            'text' => "CRM",
            "children" => [
                [
                    "name" => "Marketing",
                    "uri" => "/personnel-insurance-insurance",
                    "link" => "/personnel-insurance-insurance",
                    "text" => "Quản lý, đo lường chiến dịch marketing",
                    "icon" => "mdiBullhornOutline",
                    "color"=> "color: rgb(242, 65, 65); background: rgba(242, 65, 65, 0.08);"
                ],
                [
                    "name" => "Khách hàng",
                    "uri" => "/personnel-insurance-insurance?menu=up",
                    "link" => "/personnel-insurance-insurance?menu=up",
                    "text" => "Lưu trữ, chăm sóc, cơ hội, khách hàng",
                    "icon" => "mdiMessageProcessingOutline",
                    "color" => "color: rgb(110, 98, 255); background: rgba(110, 98, 255, 0.08);"
                ],
                [
                    "name" => "Bán hàng",
                    "uri" => "/personnel-insurance-insurance?menu=down",
                    "link" => "/personnel-insurance-insurance?menu=down",
                    "text" => "Quản lý, kiểm soát quy trình bán hàng",
                    "icon" => "mdiBagPersonal",
                    "color" => "color: rgb(32, 175, 255); background: rgba(32, 175, 255, 0.08);"
                ],
                [
                    "name" => "Thu chi",
                    "uri" => "/personnel-insurance-insurance/report-history",
                    "link" => "/personnel-insurance-insurance/report-history",
                    "text" => "Quản lý và quy trình duyệt thu chi",
                    "icon" => "mdiPercentOutline",
                    "color" => "color: rgb(251, 175, 26); background: rgba(251, 175, 26, 0.08);"
                ],
                [
                    "name" => "Kho hàng",
                    "uri" => "/personnel-insurance-insurance/report-history",
                    "link" => "/personnel-insurance-insurance/report-history",
                    "text" => "Quản lý xuất, nhập, tồn kho",
                    "icon" => "mdiCubeOutline",
                    "color"=> "color: rgb(21, 200, 114); background: rgba(21, 200, 114, 0.08);"
                ],
                [
                    "name" => "Mua hàng",
                    "uri" => "/personnel-insurance-insurance/report-history",
                    "link" => "/personnel-insurance-insurance/report-history",
                    "text" => "Quản lý và quy trình duyệt thu chi",
                    "icon" => "mdiBagPersonalTag",
                    "color"=> "color: rgb(242, 65, 65); background: rgba(242, 65, 65, 0.08);"
                ]
            ]
        ],
        [
            "name" => 'ADVANCE',
            "uri" => "<nolink>",
            "icon" => '',
            "link" => "",
            'summary' => 'ADVANCE',
            'text' => "ADVANCE",
            "children" => [
                [
                    "name" => "Hỗ trợ",
                    "uri" => "/personnel-insurance-insurance",
                    "link" => "/personnel-insurance-insurance",
                    "text" => "Hỗ trợ khách hàng bằng ticket",
                    "icon" => "mdiHeadset",
                    "color" => "color: rgb(110, 98, 255); background: rgba(110, 98, 255, 0.08);"
                ],
                [
                    "name" => "Market",
                    "uri" => "/personnel-insurance-insurance?menu=up",
                    "link" => "/personnel-insurance-insurance?menu=up",
                    "text" => "Thư viện tài nguyên mẫu",
                    "icon" => "mdiCartVariant",
                    "color"=> "color: rgb(32, 175, 255); background: rgba(32, 175, 255, 0.08);"
                ],
                [
                    "name" => "Báo cáo",
                    "uri" => "/personnel-insurance-insurance?menu=down",
                    "link" => "/personnel-insurance-insurance?menu=down",
                    "text" => "Hệ thống báo cáo BI",
                    "icon" => "mdiClockTimeThreeOutline",
                    "color" => "color: rgb(251, 175, 26); background: rgba(251, 175, 26, 0.08);"
                ],
                [
                    "name" => "Tự động",
                    "uri" => "/personnel-insurance-insurance/report-history",
                    "link" => "/personnel-insurance-insurance/report-history",
                    "text" => "BPA, xương sống của chuyển đổi số",
                    "icon" => "mdiVectorTriangle",
                    "color" => "color: rgb(21, 200, 114); background: rgba(21, 200, 114, 0.08);"
                ],
                [
                    "name" => "Open API",
                    "uri" => "/personnel-insurance-insurance/report-history",
                    "link" => "/personnel-insurance-insurance/report-history",
                    "text" => "Tích hợp A với hệ thống của bạn",
                    "icon" => "mdiXml",
                    "color" => "color: rgb(242, 65, 65); background: rgba(242, 65, 65, 0.08);"
                ]

            ]
        ],

    ]
];

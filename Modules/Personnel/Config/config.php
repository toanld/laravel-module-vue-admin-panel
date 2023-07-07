<?php

return [
    'name' => 'Personnel',
    'menu' =>[
        [
            "name" => 'Danh sách nhân sự',
            "uri" => "<nolink>",
            "icon" => '<path d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z"/></svg>',
            "link" => "",
            "children" => [
              [
                "name" => "Thêm mới",
                "uri" => "/personnel/create",
                "link" => "/personnel/create"
              ],
                [
                    "name" => "Danh sách",
                    "uri" => "/personnel",
                    "link" => "/personnel"
                ]
            ]
        ],
        [
            "name" => 'Danh sách ',
            "uri" => "<nolink>",
            "icon" => '<path d="M5 11.424V1a1 1 0 1 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.228 3.228 0 0 0 0-6.152ZM19.25 14.5A3.243 3.243 0 0 0 17 11.424V1a1 1 0 0 0-2 0v10.424a3.227 3.227 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.243 3.243 0 0 0 2.25-3.076Zm-6-9A3.243 3.243 0 0 0 11 2.424V1a1 1 0 0 0-2 0v1.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0V8.576A3.243 3.243 0 0 0 13.25 5.5Z"/>',
            "link" => "",
            "children" => [
              [
                "name" => "Thêm mới",
                "uri" => "/personnel/create",
                "link" => "/personnel/create"
              ],
                [
                    "name" => "Danh sách",
                    "uri" => "/personnel",
                    "link" => "/personnel"
                ]
            ]
        ],
    ]
];

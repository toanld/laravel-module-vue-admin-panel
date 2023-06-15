<?php

return [
    'name' => 'Blog',
    'menu' =>[
        "name" => "Blog",
        "icon" => '<path fill="currentColor" d="M19 5V19H5V5H19M21 3H3V21H21V3M17 17H7V16H17V17M17 15H7V14H17V15M17 12H7V7H17V12Z"></path>',
        "uri" => "<nolink>",
        "link" => "",
        "children" => [
        [
            "name" => "Danh mục",
            "uri" => "<nolink>",
            "link" => "",
            "children" => [
                [
                    "name" => "Thêm mới",
                    "uri" => "/blog/categories/create",
                    "link" => "/blog/categories/create"
                ],
                [
                    "name" => "Danh sách",
                    "uri" => "/blog/categories/",
                    "link" => "/blog/categories/"
                ]
            ]
        ],
        [
            "name" => "Thêm mới blog",
            "uri" => "/blog/create",
            "link" => "/blog/create"
        ],
        [
            "name" => "Danh sách blog",
            "uri" => "/blog",
            "link" => "/blog"
        ]
        ]
    ]
];

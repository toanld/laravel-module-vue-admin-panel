<?php

return [
    'name' => 'Blog',
    'menu' =>[
        "name" => "Blog",
        "icon" => "mdiPostOutline",
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

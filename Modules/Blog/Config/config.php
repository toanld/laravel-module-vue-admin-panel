<?php

return [
    'name' => 'Blog',
    'menu' =>[
        "name" => "Blog",
        "icon" => "mdiMinus",
        "uri" => "<nolink>",
        "link" => "",
        "children" => [
        [
            "name" => "Danh mục",
            "uri" => "<nolink>",
            "icon" => "mdiMinus",
            "link" => "",
            "children" => [
                [
                    "name" => "-- Thêm mới",
                    "uri" => "/blog/categories/create",
                    "link" => "/blog/categories/create"
                ],
                [
                    "name" => "-- Danh sách",
                    "uri" => "/blog/categories/",
                    "link" => "/blog/categories/"
                ]
            ]
        ],
        [
            "name" => "Thêm mới",
            "uri" => "/blog/create",
            "icon" => "mdiMinus",
            "link" => "/blog/create"
        ],
        [
            "name" => "Danh sách",
            "icon" => "mdiMinus",
            "uri" => "/blog",
            "link" => "/blog"
        ]
        ]
    ]
];

<?php

return [
    'name' => 'Blog',
    'menu' =>[
        "name" => "Blog",
        "uri" => "<nolink>",
        "link" => "",
        "children" => [
          [
            "name" => "Thêm mới",
            "uri" => "/blog/create",
            "link" => "/blog/create"
          ],
            [
                "name" => "Danh sách",
                "uri" => "/blog",
                "link" => "/blog"
            ]
        ]
    ]
];

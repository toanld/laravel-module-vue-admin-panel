<?php

return [
    'name' => 'Admin',
    'menu' =>[
            "name" => 'Admin',
            "uri" => "<nolink>",
            "link" => "",
            "children" => [
              [
                "name" => "Thêm mới",
                "uri" => "/admin/create",
                "link" => "/admin/create"
              ],
                [
                    "name" => "Danh sách",
                    "uri" => "/admin",
                    "link" => "/admin"
                ]
            ]
        ]
];

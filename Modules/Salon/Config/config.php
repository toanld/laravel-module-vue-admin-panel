<?php

return [
    'name' => 'Salon',
    'menu' =>[
            "name" => 'Salon',
            "uri" => "<nolink>",
            "link" => "",
            "children" => [
              [
                "name" => "Thêm mới",
                "uri" => "/salon/create",
                "link" => "/salon/create"
              ],
                [
                    "name" => "Danh sách",
                    "uri" => "/salon",
                    "link" => "/salon"
                ]
            ]
        ]
];

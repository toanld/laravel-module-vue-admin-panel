<?php

return [
    'name' => 'Erp',
    'menu' =>[
            "name" => 'Erp',
            "uri" => "<nolink>",
            "link" => "",
            "children" => [
              [
                "name" => "Thêm mới",
                "uri" => "/erp/create",
                "link" => "/erp/create"
              ],
                [
                    "name" => "Danh sách",
                    "uri" => "/erp",
                    "link" => "/erp"
                ]
            ]
        ]
];

<?php

return [
    'name' => 'Test',
    'menu' =>[
            "name" => 'Test',
            "uri" => "<nolink>",
            "link" => "",
            "children" => [
              [
                "name" => "Thêm mới",
                "uri" => "/test/create",
                "link" => "/test/create"
              ],
                [
                    "name" => "Danh sách",
                    "uri" => "/test",
                    "link" => "/test"
                ]
            ]
        ]
];

<?php

return [
    'role_structure' => [
        'super_admin' => [
            'users' => 'c,r,u,d',
            'blocks'=>'c,r,u,d',
            'services'=>'c,r,u,d',
            'categories'=>'c,r,u,d',
            'products'=>'c,r,u,d',
            'clients'=>'c,r,u,d',
            'projects'=>'c,r,u,d',
            'blogs'=>'c,r,u,d',
        ],
        'admin' => []
    ],
  


    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

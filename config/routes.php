<?php

return [
    [
        'name' => 'hello [<name>]',
        'description' => 'Show welcome message',
        'short_description' => 'Show welcome message',
        'defaults' => [
            'name' => 'World',
        ],
        'handler' => 'Application\Command\Hello',
    ]
];

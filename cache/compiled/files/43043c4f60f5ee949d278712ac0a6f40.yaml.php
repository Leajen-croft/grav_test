<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://login/blueprints.yaml',
    'modified' => 1439342802,
    'data' => [
        'name' => 'Login',
        'version' => '0.2.0',
        'description' => 'Enables user authentication and login screen.',
        'icon' => 'sign-in',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'admin, plugin, login',
        'homepage' => 'https://github.com/getgrav/grav-plugin-login',
        'bugs' => 'https://github.com/getgrav/grav-plugin-login/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'form',
            1 => 'email'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'label' => 'Login path',
                    'placeholder' => 'Route used to login a user'
                ]
            ]
        ]
    ]
];

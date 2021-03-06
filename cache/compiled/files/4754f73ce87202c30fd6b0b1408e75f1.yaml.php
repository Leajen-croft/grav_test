<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Liam/Documents/xampp/htdocs/grav/system/blueprints/pages/new.yaml',
    'modified' => 1439382774,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Page'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Page Title',
                    'help' => 'The title of the page',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'Folder Name',
                    'help' => 'The folder name that will be stored in the filesystem for this page',
                    'validate' => [
                        'type' => 'slug',
                        'required' => true
                    ]
                ],
                'route' => [
                    'type' => 'select',
                    'label' => 'Parent Page',
                    'classes' => 'fancy',
                    '@data-options' => '\\Grav\\Common\\Page\\Pages::parents',
                    '@data-default' => '\\Grav\\Plugin\\admin::route',
                    'options' => [
                        '/' => '- Root -'
                    ],
                    'validate' => [
                        'required' => true
                    ]
                ],
                'type' => [
                    'type' => 'select',
                    'help' => 'The page type that translates into which twig template renders the page',
                    'classes' => 'fancy',
                    'label' => 'Display Template',
                    'default' => 'default',
                    '@data-options' => '\\Grav\\Common\\Page\\Pages::types',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'visible' => [
                    'type' => 'toggle',
                    'label' => 'Visible',
                    'help' => 'Determines if a page is visible in the navigation.',
                    'highlight' => '',
                    'default' => '',
                    'options' => [
                        '' => 'Auto',
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];

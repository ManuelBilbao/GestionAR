<?php
return [
    'navigation' => [
        'default' => [
            [
                'label'  => 'Portada',
                'route'  => 'portada',
                'action' => 'index',
            ],
            [
                'label'  => 'Ciudad',
                'route'  => 'seccion',
                'params' => [
                    'seccion' => 'ciudad'
                ],
                'class'  => 'ciudad',
                'pages'  => [
                    [
                        'route' => 'noticia',
                        'params' => [
                            'seccion' => 'ciudad'
                        ],
                    ],
                ],
            ],
            [
                'label'  => 'Provincia',
                'route'  => 'seccion',
                'params' => [
                    'seccion' => 'provincia'
                ],
                'class'  => 'provincia',
                'pages'  => [
                    [
                        'route' => 'noticia',
                        'params' => [
                            'seccion' => 'entre-rios'
                        ],
                    ],
                ],
            ],
            [
                'label'  => 'País',
                'route'  => 'seccion',
                'params' => [
                    'seccion' => 'pais'
                ],
                'class'  => 'pais',
                'pages'  => [
                    [
                        'route' => 'noticia',
                        'params' => [
                            'seccion' => 'argentina'
                        ],
                    ],
                ],
            ],
            [
                'label'  => 'Mundo',
                'route'  => 'seccion',
                'params' => [
                    'seccion' => 'mundo'
                ],
                'class'  => 'mundo',
                'pages'  => [
                    [
                        'route' => 'noticia',
                        'params' => [
                            'seccion' => 'mundo'
                        ],
                    ],
                ],
            ],
            [
                'label'  => 'Deportes',
                'uri'  => '/siemprealdiez',
                'params' => [
                    'seccion' => 'siemprealdiez'
                ],
                'class'  => 'siemprealdiez',
                'pages'  => [
                    [
                        'uri' => '/siemprealdiez',
                        'params' => [
                            'seccion' => 'siemprealdiez'
                        ],
                    ],
                ],
            ],
            [
                'label'  => 'Institucional',
                'route'  => 'institucional',
                'class'  => 'institucional',
                'pages'      => [
                    [
                        'label'      => 'Clima',
                        'route'      => 'clima',
                    ],
                    [
                        'label'      => 'Concursos docentes',
                        'route'      => 'concursos',
                    ],
                    [
                        'label'      => 'Necrológicas',
                        'route'      => 'necrologicas',
                    ],
                    [
                        'label'      => 'Registro de lluvias',
                        'route'      => 'registro-lluvias',
                    ],
                    [
                        'label'      => 'venezuela',
                        'route'      => 'venezuela',
                    ],
                ],
            ],
            [
                'label'  => 'Contacto',
                'route'  => 'contacto',
                'class'  => 'contacto',
            ]
        ],
        'admin' => [
            [
                'label'      => 'Escritorio',
                'route'      => 'escritorio',
                'icon'       => 'bar-chart',
                'role'       => 4,
                'pages'      => [
                    [
                        'label'      => 'Hidraulica',
                        'route'      => 'hidraulica',
                        'icon'       => 'cloud',
                        'role'       => 4
                    ],
                ],
            ],
            [
                'label'      => 'Noticias',
                'route'      => 'admin/default',
                'controller' => 'noticias',
                'icon'       => 'list-alt',
                'role'       => 4,
                'pages'      => [
                    [
                        'label'      => 'Crear',
                        'route'      => 'crear-noticia',
                        'icon'       => 'file',
                        'role'       => 4
                    ],
                    [
                        'label'      => 'Editar',
                        'route'      => 'admin/default',
                        'controller' => 'noticias',
                        'action'     => 'editar',
                        'icon'       => 'file-text',
                        'role'       => 4
                    ],
                    [
                        'label'      => 'Borrar',
                        'route'      => 'admin/default',
                        'controller' => 'noticias',
                        'action'     => 'borrar',
                        'icon'       => 'trash',
                        'role'       => 4
                    ],
                    [
                        'label'      => 'Paginator',
                        'route'      => 'admin/paginator',
                        'controller' => 'noticias',
                        'icon'       => 'sort-by-order-alt',
                        'role'       => 4
                    ],
                ],
            ],
            [
                'label'      => 'Titulares',
                'route'      => 'admin/default',
                'controller' => 'titulares',
                'icon'       => 'tasks',
                'role'       => 4
            ],
            [
                'label'      => 'Necrológicas',
                'route'      => 'admin/default',
                'controller' => 'necrologicas',
                'icon'       => 'star',
                'role'       => 3,
                'pages'      => [
                    [
                        'label'      => 'Crear',
                        'route'      => 'admin/default',
                        'controller' => 'necrologicas',
                        'action'     => 'crear',
                        'icon'       => 'file',
                        'role'       => 3,
                    ],
                    [
                        'label'      => 'Editar',
                        'route'      => 'admin/default',
                        'controller' => 'necrologicas',
                        'action'     => 'editar',
                        'icon'       => 'file-text',
                        'role'       => 3,
                    ],
                    [
                        'label'      => 'Borrar',
                        'route'      => 'admin/default',
                        'controller' => 'necrologicas',
                        'action'     => 'borrar',
                        'icon'       => 'trash'
                    ],
                    [
                        'label'      => 'Paginator',
                        'route'      => 'admin/paginator',
                        'controller' => 'necrologicas',
                        'icon'       => 'sort-by-order-alt',
                        'role'       => 3
                    ],
                ],
            ],
            [
                'label'      => 'Concursos docentes',
                'route'      => 'admin/default',
                'controller' => 'concursos',
                'icon'       => 'book',
                'role'       => 3,
                'pages'      => [
                    [
                        'label'      => 'Crear',
                        'route'      => 'admin/default',
                        'controller' => 'concursos',
                        'action'     => 'crear',
                        'icon'       => 'file',
                        'role'       => 3,
                    ],
                    [
                        'label'      => 'Editar',
                        'route'      => 'admin/default',
                        'controller' => 'concursos',
                        'action'     => 'editar',
                        'icon'       => 'file-text',
                        'role'       => 3,
                    ],
                    [
                        'label'      => 'Borrar',
                        'route'      => 'admin/default',
                        'controller' => 'concursos',
                        'action'     => 'borrar',
                        'icon'       => 'trash',
                        'role'       => 3,
                    ],
                    [
                        'label'      => 'Paginator',
                        'route'      => 'admin/paginator',
                        'controller' => 'concursos',
                        'icon'       => 'sort-by-order-alt',
                        'role'       => 3,
                    ],
                ],
            ],
            [
                'label'      => 'Farmacias de turno',
                'route'      => 'admin/default',
                'controller' => 'farmacias',
                'icon'       => 'medkit',
                'role'       => 3,
            ],
            [
                'label'      => 'Registro de lluvias',
                'route'      => 'lluvias',
                'params'     => [
                    'ciudad' => '1',
                ],
                'icon'       => 'umbrella',
                'role'       => 3,
            ],
        ],
        'deportivo' => [
            [
                'label'  => 'Liga Regional',
                'route'  => 'depotivo_seccion',
                'params' => [
                    'seccion' => 'regional'
                ],
            ],
            [
                'label'  => 'Primera',
                'route'  => 'depotivo_seccion',
                'params' => [
                    'seccion' => 'primera'
                ],
            ],
            [
                'label'  => 'Selección',
                'route'  => 'depotivo_seccion',
                'params' => [
                    'seccion' => 'seleccion'
                ],
            ],
            [
                'label'  => 'CONMEBOL',
                'route'  => 'depotivo_seccion',
                'params' => [
                    'seccion' => 'conmebol'
                ],
            ],
            [
                'label'  => 'Europa',
                'route'  => 'depotivo_seccion',
                'params' => [
                    'seccion' => 'europa'
                ],
            ],
        ],
    ],
    'service_manager' => [
        'abstract_factories' => [
            'Zend\Navigation\Service\NavigationAbstractServiceFactory'
        ],
    ],
];
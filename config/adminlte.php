<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'SigSEJUV',

    'title_prefix' => '',

    'title_postfix' => ' | ',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Sig</b>SEJUV',

    'logo_mini' => '<i class="fa fa-dashboard fa-x2 fa-fw"></i>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
       'NAVEGAÇÃO',
        [
            'text' => 'Blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Dashboard',
            'url'         => 'home',
            //'url'         => 'admin/pages',
            'icon'        => 'dashboard',
            'icon_color'  => 'yellow',
            //'label'       => 4,
            //'label_color' => 'success',
        ],  
         'CONFIGURAÇÕES',   
        [
            'text'    => 'Usuários',
            'icon'    => 'users',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'url'  => '#',
                ],
                [
                    'text' => 'Lista',
                    'icon' => 'list',
                    'url'  => '#',
                ],
            ],
            
        ],
        [
            'text'    => 'Funções',
            'icon'    => 'sitemap',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'url'  => '#',
                ],
                [
                    'text' => 'Lista',
                    'icon' => 'list',
                    'url'  => '#',
                ],
            ],
            
        ],

        'GABINETE DO SECRETÁRIO(A)',
        [
            'text'    => 'AGENDA ',
            'icon'    => 'book',
            'icon_color' => 'green',
            'submenu' => [
                [
                    'text' => 'Lista de Eventos',
                    'icon' => 'calendar',
                    'icon_color' => 'green',
                    'url'  => '#',
                ],
            ],
        ],
        [
            'text'          => 'ASSESSORIAS ',
            'icon'          => 'handshake-o',
            'icon_color'    => 'green',
            'submenu'       => [
                [
                    'text'      => 'JURIDICO',
                    'icon'      => 'balance-scale',
                    'icon_color'=> 'green',
                    'submenu'   => [
                        [
                            'text'      => 'Processos',
                            'icon'      => 'folder',
                            'icon_color'=> 'green',
                            'url'       => '#',
                        ],
                    ],
                    
                ],
            ],
        ],
        [
            'text'          => 'INDICADORES',
            'icon'          => 'line-chart',
            'icon_color'    => 'green',
            'url'           => '#',
            
        ],

         'DEP. ADMINISRATIVO FINANCEIRO',
        [
            'text'          => 'RECURSOS HUMANOS',
            'icon'          => 'address-card',
            'icon_color'    => 'blue',
            'submenu'       => [
                [
                    'text'          => 'SERVIDORES',
                    'icon'          => 'id-badge',
                    'icon_color'    => 'blue',
                    'url'           => '#',
                ],
                [
                    'text'          => 'FÉRIAS',
                    'icon'          => 'plane',
                    'icon_color'    => 'blue',
                    'url'           => '#',
                ],
            ],
        ],
        [
            'text'          => 'PROTOCOLO',
            'icon'          => 'files-o',
            'icon_color'    => 'blue',
            'submenu'       => [
                [
                    'text'          => 'RECEBIDOS',
                    'icon'          => 'sign-in',
                    'icon_color'    => 'blue',
                    'url'           => '#',
                ],
                [
                    'text'          => 'EXPEDIDOS',
                    'icon'          => 'sign-out',
                    'icon_color'    => 'blue',
                    'url'           => '#',
                ],
            ],
        ],
        [
            'text'          => 'PATRIMÔNIO',
            'icon'          => 'cubes',
            'icon_color'    => 'blue',
            'submenu'       => [
                [
                    'text'          => 'AUMOXARIFADO',
                    'icon'          => 'cubes',
                    'icon_color'    => 'blue',
                    'url'           => '#',
                ],
                [
                    'text'          => 'BENS',
                    'icon'          => 'tags',
                    'icon_color'    => 'blue',
                    'url'           => '#',
                ],
            ],
        ],
        [
            'text'          => 'FINANCEIRO',
            'icon'          => 'money',
            'icon_color'    => 'blue',
            'submenu'       => [
                [
                    'text'          => 'LICITAÇÕES',
                    'icon'          => 'gavel',
                    'icon_color'    => 'blue',
                    'url'           => '#',
                ],
                [
                    'text'          => 'GESTÃO DE CONTRATOS',
                    'icon'          => 'file-text-o',
                    'icon_color'    => 'blue',
                    'url'           => '#',
                ],
            ],
        ],
        [
            'text'          => 'TRANSPORTE',
            'icon'          => 'car',
            'icon_color'    => 'blue',
            'submenu'       => [
                [
                    'text'       => 'FROTA',
                    'icon'       => 'car',
                    'icon_color' => 'blue',
                    'url'        => '#',
                ],
                [
                    'text'       => 'ABASTECIMENTOS',
                    'icon'       => 'car',
                    'icon_color' => 'blue',
                    'url'        => '#',
                ],
            ],
        ],
         'DEP. ESPORTIVO',
        [
            'text'    => 'DESENVOL. ESPORTIVO',
            'icon'    => 'font-awesome',
            'icon_color' => 'yellow',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'icon_color' => 'yellow',
                    'url'  => '#',
                ],
                
            ],
        ],
        [
            'text'    => 'ESPORTE AMANDOR',
            'icon'    => 'trophy',
            'icon_color' => 'yellow',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'icon_color' => 'yellow',
                    'url'  => '#',
                ],
                
            ],
        ],
        [
            'text'    => 'INICIAÇÃO ESPORTIVA',
            'icon'    => 'play-circle',
            'icon_color' => 'yellow',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'url'  => '#',
                ],
                
            ],
        ],
        [
            'text'    => 'GINÁSIO POLIESPORTIVO',
            'icon'    => 'dribbble',
            'icon_color' => 'yellow',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'url'  => '#',
                ],
                
            ],
        ],
        [
            'text'    => 'ESTÁDIO ROMEIRÃO',
            'icon'    => 'futbol-o',
            'icon_color' => 'yellow',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'url'  => '#',
                ],
                
            ],
        ],
        [
            'text'    => 'ARRENINHA',
            'icon'    => 'futbol-o',
            'icon_color' => 'yellow',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'url'  => '#',
                ],
                
            ],
        ],
        'DEP. JUVENTUDE',
        [
            'text'    => '?...?',
            'icon'    => 'eye-slash',
            'icon_color' => 'red',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'icon_color' => 'red',
                    'url'  => '#',
                ],
            ],
        ],
        [
            'text'    => 'CEU\'s',
            'icon'    => 'university',
            'icon_color' => 'red',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'icon' => 'plus',
                    'icon_color' => 'red',
                    'url'  => '#',
                ],
            ],
        ],
       
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];

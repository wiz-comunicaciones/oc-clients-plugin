<?php namespace Wiz\Clients;

use Backend;
use BackendMenu;
use Event;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Clientes',
            'description' => 'Plugin que permite la gestión de clientes',
            'author'      => 'Wiz Comunicaciones',
            'icon'        => 'icon-leaf',
            'iconSvg'     => '/plugins/wiz/clients/assets/images/plugin-icon.svg',
            'homepage'    => 'https://wiz.cl'
        ];
    }

    public function registerPermissions()
    {
        return [
            'wiz.Clients::manage_clients' => [
                'tab'   => 'Modulo de clientes',
                'label' => 'Acceder al módulo de gestión de clientes',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'wiz-clients' => [
                'label'       => 'Clientes',
                'url'         => Backend::url('wiz/clients/clients'),
                'icon'        => 'icon-building-o',
                'iconSvg'     => '/plugins/wiz/clients/assets/images/plugin-icon.svg',
                'permissions' => [ 'wiz.clients.manage_clients' ],
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            \Wiz\Clients\Components\Clients::class => 'Clients',
        ];
    }

}

<?php namespace Wiz\Clients\Components;

use Cms\Classes\ComponentBase;
use Wiz\Clients\Models\Client as ClientModel;

class Clients extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Todos los clientes',
            'description' => 'Muestra todos los clientes.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->clients = $this->page['clients'] = $this->loadClients();
    }

    protected function loadClients()
    {
        $clients = ClientModel::published()
            ->get();
        return $clients;
    }

}

<?php namespace Wiz\Clients\Models;

use Model;

class Client extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\NestedTree;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public $table = 'wiz_clients_clients';

    public $rules = [
        'name' => 'required',
        'logo' => 'required'
    ];

    public $attachOne = [
        'logo' => [
            'System\Models\File',
            'delete' => true
        ]
    ];

    public function beforeCreate()
    {
        $user = \BackendAuth::getUser();
        if ($user)
            $this->author_id = $user->id;
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', 1);
    }

}
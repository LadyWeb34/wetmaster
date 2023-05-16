<?php namespace Admin\teams\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_teams_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

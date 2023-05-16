<?php namespace Admin\setvices\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_setvices_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

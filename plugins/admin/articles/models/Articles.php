<?php namespace Admin\articles\Models;

use Model;

/**
 * Model
 */
class Articles extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_articles_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

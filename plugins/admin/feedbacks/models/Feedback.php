<?php namespace Admin\feedbacks\Models;

use Model;

/**
 * Model
 */
class Feedback extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_feedbacks_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

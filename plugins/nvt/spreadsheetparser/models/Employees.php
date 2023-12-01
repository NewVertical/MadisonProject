<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * Employees Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Employees extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_employees';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'employees_prod',
        'employees_total',
        'deviation'
    ];
}

<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * TrucksSoldShippedYtd Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class TrucksSoldShippedYtd extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_trucks_sold_shipped_ytds';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'category',
        'lumber',
        'posts',
        'total',
        'year'
    ];
}

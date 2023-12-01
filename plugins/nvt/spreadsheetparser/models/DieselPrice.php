<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * DieselPrice Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class DieselPrice extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_diesel_prices';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'diesel_price',
        'deviation'
    ];
}

<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * CopperMarket Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class CopperMarket extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_copper_markets';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'day',
        'price',
        'deviation'
    ];
}

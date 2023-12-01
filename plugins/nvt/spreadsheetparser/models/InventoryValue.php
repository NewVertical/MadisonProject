<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * InventoryValue Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class InventoryValue extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_inventory_values';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'inventory_type',
        'current_value',
        'yesterday_value',
        'deviation'
    ];
}

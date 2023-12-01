<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * InventoryVolumeCalculations Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class InventoryVolumeCalculations extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_inventory_volume_calculations';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'type',
        'mbf',
        'trucks'
    ];
}

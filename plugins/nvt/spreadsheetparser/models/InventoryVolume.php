<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * InventoryVolume Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class InventoryVolume extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_inventory_volumes';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'category',
        'mbf',
        'trucks'
    ];
}

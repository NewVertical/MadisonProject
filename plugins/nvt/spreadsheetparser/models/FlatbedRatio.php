<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * FlatbedRatio Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class FlatbedRatio extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_flatbed_ratios';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'flatbed_ratio',
        'date',
        'deviation'
    ];
}

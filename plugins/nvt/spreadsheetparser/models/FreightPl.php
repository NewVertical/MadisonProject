<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * FreightPl Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class FreightPl extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_freight_pls';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'freight_pl',
        'date',
        'deviation'
    ];
}

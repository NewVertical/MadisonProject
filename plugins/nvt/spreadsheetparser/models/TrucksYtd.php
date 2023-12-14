<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * TrucksYtd Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class TrucksYtd extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_trucks_ytds';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'trucks_ytd',
        'year',
        'deviation'
    ];
}

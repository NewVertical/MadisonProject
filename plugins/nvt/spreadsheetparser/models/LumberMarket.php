<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * LumberMarket Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class LumberMarket extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_lumber_markets';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'date',
        'price',
        'deviation'
    ];
}

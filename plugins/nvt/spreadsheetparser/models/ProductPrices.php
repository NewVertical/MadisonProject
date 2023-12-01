<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * ProductPrices Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class ProductPrices extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_product_prices';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'product_name',
        'current_price',
        'last_year_price',
        'deviation'
    ];
}

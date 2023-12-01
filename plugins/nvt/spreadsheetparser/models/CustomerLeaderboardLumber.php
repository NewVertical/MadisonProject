<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * CustomerLeaderboardLumber Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class CustomerLeaderboardLumber extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_customer_leaderboard_lumbers';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'customer',
        'mbf',
        'trucks_ytd',
        'deviation'
    ];
}

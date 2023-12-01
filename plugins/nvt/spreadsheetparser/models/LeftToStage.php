<?php namespace Nvt\Spreadsheetparser\Models;

use Model;

/**
 * LeftToStage Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class LeftToStage extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nvt_spreadsheetparser_left_to_stages';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'left_to_stage',
        'deviation'
    ];
}

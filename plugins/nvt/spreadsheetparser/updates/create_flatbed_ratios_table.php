<?php namespace Nvt\Spreadsheetparser\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateFlatbedRatiosTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    public $timestamps = false;
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('nvt_spreadsheetparser_flatbed_ratios', function(Blueprint $table) {
            $table->id();
            $table->float('flatbed_ratio')->nullable();
            $table->date('date');
            $table->float('deviation')->nullable();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('nvt_spreadsheetparser_flatbed_ratios');
    }
};

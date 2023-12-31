<?php namespace Nvt\Spreadsheetparser\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateTrucksYtdsTable Migration
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
        Schema::create('nvt_spreadsheetparser_trucks_ytds', function(Blueprint $table) {
            $table->id();
            $table->float('trucks_ytd')->nullable();
            $table->date('year');
            $table->float('deviation')->nullable();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('nvt_spreadsheetparser_trucks_ytds');
    }
};

<?php namespace Nvt\Spreadsheetparser\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateTrucksSoldShippedYtdsTable Migration
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
        Schema::create('nvt_spreadsheetparser_trucks_sold_shipped_ytds', function(Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->float('lumber')->nullable();
            $table->float('posts')->nullable();
            $table->float('total')->nullable();
            $table->date('year')->nullable();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('nvt_spreadsheetparser_trucks_sold_shipped_ytds');
    }
};

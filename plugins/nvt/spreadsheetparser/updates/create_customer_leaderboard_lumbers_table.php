<?php namespace Nvt\Spreadsheetparser\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCustomerLeaderboardLumbersTable Migration
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
        Schema::create('nvt_spreadsheetparser_customer_leaderboard_lumbers', function(Blueprint $table) {
            $table->id();
            $table->string('customer')->nullable();
            $table->integer('mbf')->nullable();
            $table->integer('trucks_ytd')->nullable();
            $table->integer('deviation')->nullable();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('nvt_spreadsheetparser_customer_leaderboard_lumbers');
    }
};

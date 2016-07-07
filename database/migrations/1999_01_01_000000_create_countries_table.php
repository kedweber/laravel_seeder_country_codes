<?php
/**
 * CountryCodes  - WeberStudio.net
 *
 * @author      KedWeber <black001goat@gmail.com>
 * @link        http://kedweber.github.io/
 * @copyright   Copyright (c) 2002, KedWeber
 * @license     Creative Commons
 *
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCountriesTable
 * @package CountryCodes
 */
class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('countries');

        //
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 2);
            $table->unique('code');
            $table->string('code3', 3)->nullable();
            $table->string('codeNumeric', 4)->nullable();
            $table->string('domain', 4)->nullable();
            $table->string('label_nl', 75);
            $table->string('label_en', 75)->nullable();
            $table->string('label_de', 75)->nullable();
            $table->string('label_es', 75)->nullable();
            $table->string('label_fr', 75)->nullable();
            $table->string('postCode', 75)->nullable();
            $table->boolean('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('countries');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('websites', function (Blueprint $table) {
            $table->string('section_1')->after('youtube');
            $table->string('section_2');
            $table->string('section_3');
            $table->string('section_4');
            $table->string('section_5');
            $table->string('section_6');
            $table->string('section_7');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('websites', function (Blueprint $table) {
            $table->dropColumn('section_1');
            $table->dropColumn('section_2');
            $table->dropColumn('section_3');
            $table->dropColumn('section_4');
            $table->dropColumn('section_5');
            $table->dropColumn('section_6');
            $table->dropColumn('section_7');
        });
    }
};

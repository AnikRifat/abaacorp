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
        Schema::table('website', function (Blueprint $table) {
            $table->string('header_color')->after('sect');
            $table->string('header_text_color');
            $table->string('footer_color');
            $table->string('footer_text_color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('website', function (Blueprint $table) {
            $table->dropColumn('header_color');
            $table->dropColumn('header_text_color');
            $table->dropColumn('footer_color');
            $table->dropColumn('footer_text_color');
        });
    }
};

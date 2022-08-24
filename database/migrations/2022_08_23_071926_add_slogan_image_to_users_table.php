<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::table('websites', function (Blueprint $table) {
            $table->text('slogan_image')->after('slogan');
            $table->text('about_image')->after('about');
            $table->text('customer')->after('favicon');
            $table->text('project')->after('favicon');
            $table->text('worker')->after('favicon');
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
            $table->dropColumn('slogan_image');
            $table->dropColumn('about_image');
            $table->dropColumn('customer');
            $table->dropColumn('project');
            $table->dropColumn('worker');
        });
    }
};

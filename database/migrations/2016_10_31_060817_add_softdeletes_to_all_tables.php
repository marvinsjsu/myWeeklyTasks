<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftdeletesToAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function ($table) {
            $table->softDeletes();
            $table->dropColumn('deleted');
        });

        Schema::table('tasks', function ($table) {
            $table->softDeletes();
            $table->dropColumn('deleted');
        });

        Schema::table('projects', function ($table) {
            $table->softDeletes();
            $table->dropColumn('deleted');
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
    }
}

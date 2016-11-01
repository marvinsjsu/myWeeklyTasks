<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeletedToAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function(Blueprint $table) {
            $table->integer('deleted')->default(0);        
        });   
        Schema::table('projects', function(Blueprint $table) {
            $table->integer('deleted')->default(0);        
        }); 
        Schema::table('tasks', function(Blueprint $table) {
            $table->integer('deleted')->default(0);        
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

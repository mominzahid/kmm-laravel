<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeForeignKeyRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('made_by_id')->references('id')->on('users');
        });
        
        Schema::table('sales', function (Blueprint $table) {
            $table->foreign('car_id')->references('id')->on('cars');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropForeign('car_id');
            $table->dropForeign('made_by_id');
        });
        
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropForeign('car_id');
        });

    }
}

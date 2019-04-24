<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterPartnershipsTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partnerships', function(Blueprint $table)
        {
            $table->string('image')->default('https://via.placeholder.com/800x350.png?text=Partnership');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partnerships', function(Blueprint $table)
        {
            $table->dropColumn('image');

        });
    }
}

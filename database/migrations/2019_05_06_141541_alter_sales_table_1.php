<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterSalesTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function(Blueprint $table)
        {
            $table->boolean('status')->default(false)->after('id');
        });
//        Schema::table('invests', function(Blueprint $table)
//        {
//            $table->boolean('status')->default(false)->after('id');
//        });
        Schema::table('partnerships', function(Blueprint $table)
        {
            $table->boolean('status')->default(false)->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function(Blueprint $table)
        {
            $table->dropColumn('status');
        });
//        Schema::table('invests', function(Blueprint $table)
//        {
//            $table->dropColumn('status');
//        });
        Schema::table('partnerships', function(Blueprint $table)
        {
            $table->dropColumn('status');
        });
    }
}

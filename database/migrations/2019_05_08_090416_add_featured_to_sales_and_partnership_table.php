<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeaturedToSalesAndPartnershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->boolean('featured')->default(false)->after('id');
        });
        Schema::table('partnerships', function (Blueprint $table) {
            $table->boolean('featured')->default(false)->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropColumn('featured');
        });
        Schema::table('partnerships', function (Blueprint $table) {
            $table->dropColumn('featured');
        });
    }
}

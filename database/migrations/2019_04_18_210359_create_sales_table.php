<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->text('summary')->nullable();
            $table->string('business_type')->nullable();
            $table->string('shareholders')->nullable();
            $table->integer('employees')->nullable();
            $table->integer('value')->nullable();
            $table->string('listed')->nullable();
            $table->text('selling_conditions')->nullable();
            $table->text('selling_reasons')->nullable();
            $table->string('sales_authorization')->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales');
    }
}

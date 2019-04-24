<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnerships', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('summary');
            $table->text('partnership');
            $table->integer('expected_profit');
            $table->text('project_stage');
            $table->string('company_type');
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
        Schema::drop('partnerships');
    }
}

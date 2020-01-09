<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllproductmemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allproductmember', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('name');
            $table->string('number_product');
            $table->string('pastcost');
            $table->string('lastcost');
            $table->string('Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allproductmember');
    }
}

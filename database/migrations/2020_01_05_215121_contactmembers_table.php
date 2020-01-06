<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactmembers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('number');
            $table->string('email');
            $table->string('massage');
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
        Schema::dropIfExists('contactmembers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AboutmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutmembers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profile');
            $table->string('title');
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->string('Description');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('aboutmembers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Entrepreneurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrepreneurs', function (Blueprint $table) {
            $table->bigIncrements('id_entrepreneur');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('id_company')->nullable();
            $table->foreign('id_company')->references('id_company')->on('companies')->onDelete('set null');
            $table->timestamp('started_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrepreneurs');
    }
}

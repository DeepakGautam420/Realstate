<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcoming_sales', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('login_status');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('image');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('locality');
            $table->string('price');
            $table->string('area');
            $table->string('description');
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
        Schema::dropIfExists('upcoming_sales');
    }
};

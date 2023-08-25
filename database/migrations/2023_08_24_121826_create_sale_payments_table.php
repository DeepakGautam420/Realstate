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
        Schema::create('sale_payments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->string('for_sale');
            $table->string('property_type');
            $table->string('property_location');
            $table->string('new_project_socity');
            $table->string('property_address');
            $table->string('carpet_area');
            $table->string('super_area');
            $table->string('from_month');
            $table->string('to_month');
            $table->string('security_amnt');
            $table->string('managment_charge');
            $table->string('picture');
            $table->string('description');
            $table->string('full_rent');
            $table->softDeletes();
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
        Schema::dropIfExists('sale_payments');
    }
};

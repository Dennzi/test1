<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->integer('serial_number')->primary();
            $table->string('user_id',20);
            $table->string('store_name',20);
            $table->text('store_information');
            $table->text('store_introduction');
            $table->string('rural',2);
            $table->string('photo_pass',50)->nullable($value = true);
            $table->text('allergies')->nullable($value = true);
            $table->string('store_stype',5)->nullable($value = true);
            $table->string('area',4);
            $table->text('religion')->nullable($value = true);
            $table->string('url',100)->nullable($value = true);
            $table->string('street_address',30)->nullable($value = true);
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
        Schema::dropIfExists('information');
    }
}

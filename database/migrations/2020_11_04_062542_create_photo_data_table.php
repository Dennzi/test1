<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoDataTable extends Migration
{
    public function up()
    {
        Schema::create('photo_data', function (Blueprint $table) {
            $table->string('user_id',20)->primary();
            $table->integer('serial_number');
            $table->string('photo');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('photo_data');
    }
}

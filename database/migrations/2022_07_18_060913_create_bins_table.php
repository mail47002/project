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
        Schema::create('bins', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->integer('device_id');
            $table->string('name');
            $table->text('description');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('medium');
            $table->dateTime('last_updated_at');
            $table->integer('max_volume');
            $table->integer('actual_volume');
            $table->float('actual_volume_percent');
            $table->float('battery');
            $table->float('temperature');
            $table->string('mess_data');
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
        Schema::dropIfExists('bins');
    }
};

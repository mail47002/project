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
        Schema::create('user_actions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->integer('bin_id');
            $table->enum('type',['empty','report_amount','report_problem','new_location']);
            $table->integer('old_bag_id');
            $table->integer('new_bag_id');
            $table->text('remark');
            $table->integer('disposable_bottles');
            $table->integer('returnable_bottles');
            $table->integer('no_deposite_bottles');  
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
        Schema::dropIfExists('user_actions');
    }
};

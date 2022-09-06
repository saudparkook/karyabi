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
    {//سابقه تحصیلی
        Schema::create('education', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('edu');
            $table->integer('uni');
            $table->string('avg');
            $table->text('description');
            $table->integer('start_date');
            $table->integer('end_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
};

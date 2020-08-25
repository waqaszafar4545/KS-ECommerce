<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitionSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibition_seminars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('start');
            $table->string('end');
            $table->string('host');
            $table->string('name');
            $table->string('email');
            $table->string('title');
            $table->text('description');
            $table->integer('theater_id');
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
        Schema::dropIfExists('exhibition_seminars');
    }
}

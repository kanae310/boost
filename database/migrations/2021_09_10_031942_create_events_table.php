<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->char('event_name', 255);
            $table->text('description');
            $table->date('application_period');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->char('location', 255);
            $table->integer('category_id');
            $table->integer('host_user_id');
            $table->char('discord_url', 255);
            $table->char('event_img', 255);
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
        Schema::dropIfExists('events');
    }
}

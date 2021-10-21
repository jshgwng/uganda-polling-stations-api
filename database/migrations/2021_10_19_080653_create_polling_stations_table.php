<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollingStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polling_stations', function (Blueprint $table) {
            $table->id();
            $table->string("polling_station_code")->unique();
            $table->string("polling_station_name");
            $table->integer("voter_count");
            $table->integer("no_of_females");
            $table->integer("no_of_males");
            $table->string("fk_parish_code");
            $table->foreign("fk_parish_code")->references("parish_code")->on("parishes")->on("parishes")->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('polling_stations');
    }
}

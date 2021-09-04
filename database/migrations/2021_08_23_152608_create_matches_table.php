<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string('club_hote');
            $table->string('club_guest');
            $table->string('club_hote_pic');
            $table->string('club_guest_pic');
            $table->string('club_hote_but');
            $table->string('club_guest_but');
            $table->string('heure');
            $table->string('etat');
            $table->string('title');
            $table->string('mic');
            $table->string('cup');
            $table->string('channel');
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
        Schema::dropIfExists('matches');
    }
}

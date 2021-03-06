<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acts', function (Blueprint $table) {
            // create activity table
            $table->increments('id');
            $table->string('title');
            $table->mediumText('body');
            $table->enum('category', array('lecture', 'charity', 'job', 'outdoors', 'competition', 'recruiting', 'exhibition', 'other'));
            $table->dateTime('start_time'); //Activity start time
            $table->dateTime('end_time'); //Activity end time
            $table->integer('num_ppl')->default(0); // the number of people attending
            $table->enum('status', array('planning', 'ongoing', 'ended'));
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
        Schema::dropIfExists('acts');
    }
}

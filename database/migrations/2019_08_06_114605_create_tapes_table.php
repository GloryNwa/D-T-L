<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tapes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('program');
            $table->integer('minister');
            $table->string('programDescription');
            $table->string('producer');
            $table->string('shelfNo');
            $table->string('rowNo');         
            $table->string('tapeNumbering');
            $table->string('status');
            $table->string('dateYear');
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
        Schema::dropIfExists('tapes');
    }
}

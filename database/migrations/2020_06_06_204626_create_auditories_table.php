<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditories', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->enum("type", [
                1 => "лекционка",
                2 => "компьютерный",
                3 => "не компьютерный",
            ]);
            $table->integer("capacity");
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
        Schema::dropIfExists('auditories');
    }
}

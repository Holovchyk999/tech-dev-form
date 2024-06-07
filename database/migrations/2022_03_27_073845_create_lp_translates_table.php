<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLpTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lp_translates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category', 100);
            $table->string('key', 255);
            $table->text('landing_ids')->nullable();
            $table->text('en')->nullable();
            $table->text('pl')->nullable();
            $table->text('es')->nullable();
            $table->text('ru')->nullable();
            $table->text('de')->nullable();
            $table->text('th')->nullable();
            $table->text('pt-br')->nullable();
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
        Schema::dropIfExists('lp_translates');
    }
}

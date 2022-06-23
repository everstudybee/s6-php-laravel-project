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
        Schema::create('doctors_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('doctor_id')->constrained();
            $table->string('field', 32);
            $table->string('action', 16);
            $table->text('old_value');
            $table->text('new_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors_log');
    }
};

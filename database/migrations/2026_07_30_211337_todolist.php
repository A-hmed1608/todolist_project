<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //create table todolist
        Schema::create('todolist', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('position')->default(0); //valeur par defaut est 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop table todolist
        Schema::dropIfExists('todolist');
    }
};

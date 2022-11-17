<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('category_note', function (Blueprint $table) {
            $table->foreignId('note_id')->constrained();
            $table->foreignId('category_id')->constrained();
        });
    }

    public function down()
    {
        //
    }
};

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
        Schema::create('teaching_resource', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 255);
            $table->integer("activityId");
            $table->string('description');
            $table->string("file", 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teaching_resource');
    }
};

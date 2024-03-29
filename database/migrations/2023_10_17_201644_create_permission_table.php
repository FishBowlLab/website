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
        Schema::create('permission', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Is this how I should be structuring the foreign keys?
            $table->unsignedBigInteger('role_id'); // FK to 'user_roles' or 'roles'
            $table->string('permission_name');
            $table->foreign('role_id')->references('id')->on('user_roles'); // or on 'roles'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission');
    }
};

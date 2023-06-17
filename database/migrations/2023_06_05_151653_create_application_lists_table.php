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
        Schema::create('application_lists', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('imgUrl');
            $table->string('phone_number');
            $table->text('availability');
            $table->string('status')->nullable();
            $table->string('role_to_apply')->nullable();
            $table->integer('marks')->nullable();
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
        Schema::dropIfExists('application_lists');
    }
};

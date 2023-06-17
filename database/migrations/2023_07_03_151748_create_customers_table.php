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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->unsignedInteger('biceps')->nullable();
            $table->unsignedInteger('triceps')->nullable();
            $table->unsignedInteger('arm_5')->nullable();
            $table->string('mobilenumber');
            $table->unsignedInteger('jerks')->nullable();
            $table->unsignedInteger('bout')->nullable();
            $table->unsignedInteger('leg_5')->nullable();
            $table->date('date_of_birth');
            $table->float('weight');
            $table->string('imgUrl');
            $table->date('start_date_of_program');
            $table->float('fat_content');
            $table->string('oxydation_type')->nullable();
            $table->float('fat_content_kg');
            $table->float('starting_weight');
            $table->float('major_mass');
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
        Schema::dropIfExists('customers');
    }
};

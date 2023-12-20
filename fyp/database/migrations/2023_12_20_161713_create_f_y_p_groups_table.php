<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('f_y_p_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->default(1);
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            // Add other FYPGroup attributes here
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fyp_groups');
    }
};

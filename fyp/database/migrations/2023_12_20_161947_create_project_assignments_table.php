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
        Schema::create('project_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluator_id');
            $table->unsignedBigInteger('fyp_group_id');
            $table->foreign('evaluator_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('fyp_group_id')->references('id')->on('fyp_groups')->onDelete('cascade');
            // Add other ProjectAssignment attributes here
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_assignments');
    }
};

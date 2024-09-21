<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBootcampApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('bootcamp_applications', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('education');
            $table->string('career_path');
            $table->string('computer_literacy');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bootcamp_applications');
    }
}

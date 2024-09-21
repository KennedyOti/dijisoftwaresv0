<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReasonForJoiningToBootcampApplicationsTable extends Migration
{
    public function up()
    {
        Schema::table('bootcamp_applications', function (Blueprint $table) {
            $table->string('reason_for_joining')->nullable(); // Add the column
        });
    }

    public function down()
    {
        Schema::table('bootcamp_applications', function (Blueprint $table) {
            $table->dropColumn('reason_for_joining'); // Remove the column
        });
    }
}

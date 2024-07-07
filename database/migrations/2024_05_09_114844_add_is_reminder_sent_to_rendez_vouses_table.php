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
        Schema::table('rendez_vouses', function (Blueprint $table) {
            $table->boolean('is_reminder_sent')->default(false);
        });
    }

    public function down()
    {
        Schema::table('rendez_vouses', function (Blueprint $table) {
            $table->dropColumn('is_reminder_sent');
        });
    }
};

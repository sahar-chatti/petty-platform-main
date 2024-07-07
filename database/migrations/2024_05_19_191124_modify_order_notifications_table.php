<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class ModifyOrderNotificationsTable extends Migration
{
    public function up()
    {
        Schema::table('order_notifications', function (Blueprint $table) {
            // Drop the existing default constraint before altering the column
            $table->string('status')->default('pending')->change();
        });
    }

    public function down()
    {
        Schema::table('order_notifications', function (Blueprint $table) {
            // You can revert the changes here if necessary
            $table->string('status')->change();
        });
    }
}
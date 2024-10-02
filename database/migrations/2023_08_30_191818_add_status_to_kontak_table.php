<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (!Schema::hasColumn('kontak', 'status')) {
            Schema::table('kontak', function (Blueprint $table) {
                $table->tinyInteger('status')->default(1);
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('kontak', 'status')) {
            Schema::table('kontak', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
    }
};
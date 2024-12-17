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
        if (!Schema::hasColumn('slider', 'slider_status')) {
            Schema::table('slider', function (Blueprint $table) {
                $table->bigInteger('slider_status')->default(0);
            });
        }
        if (!Schema::hasColumn('slider', 'slider_updated_by')) {
            Schema::table('slider', function (Blueprint $table) {
                $table->bigInteger('slider_updated_by')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (!Schema::hasColumn('slider', 'slider_status')) {
            Schema::table('slider', function (Blueprint $table) {
                $table->dropColumn('slider_status');
            });
        }
        if (!Schema::hasColumn('slider', 'slider_updated_by')) {
            Schema::table('slider', function (Blueprint $table) {
                $table->dropColumn('slider_status');
            });
        }
    }
};
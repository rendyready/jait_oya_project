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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('produk_title');
            $table->text('produk_description');
            $table->string('produk_image');
            $table->string('produk_status');
            $table->string('produk_information')->default(0);
            $table->bigInteger('produk_created_by')->nullable();
            $table->timestampTz('produk_created_at')->useCurrent();
            $table->bigInteger('produk_updated_by')->nullable();
            $table->timestampTz('produk_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
};
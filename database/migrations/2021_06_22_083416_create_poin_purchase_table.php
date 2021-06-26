<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoinPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_purchase', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('point_purchase')->default('0');
            $table->string('os_type')->nullable();
            $table->string('description')->nullable();
            $table->string('order_id')->nullable();
            $table->string('status')->default('0');
            $table->string('method')->nullable();
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
        Schema::dropIfExists('poin_purchase');
    }
}

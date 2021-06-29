<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('os_type')->nullable();
            $table->string('description')->nullable();
            $table->string('order_id')->nullable();
            $table->string('product_total')->nullable();
            $table->string('bill_total')->nullable();
            $table->string('account')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('bill');
    }
}

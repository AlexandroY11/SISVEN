<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->unsignedBigInteger('customer_id');
            $table->date('date');
            $table->unsignedBigInteger('paymode_id');
            
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('paymode_id')->references('id')->on('paymodes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
             $table->bigIncrements('transaction_id');

            $table->integer('student_id');

            $table->integer('fee_id');

            $table->integer('user_id');

            $table->integer('paid_id');

            $table->date('transaction_date');

            $table->text('remark');

            $table->longText('describtion');

            $table->softDeletes();

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
        Schema::dropIfExists('transactions');
    }
}

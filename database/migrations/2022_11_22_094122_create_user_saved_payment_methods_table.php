<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSavedPaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_saved_payment_methods', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->text('stripe_user_id');
            $table->string('card_last_for_digit');
            $table->string('card_name');
            $table->string('country');
            $table->string('exp_month');
            $table->string('exp_year');
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
        Schema::dropIfExists('user_saved_payment_methods');
    }
}

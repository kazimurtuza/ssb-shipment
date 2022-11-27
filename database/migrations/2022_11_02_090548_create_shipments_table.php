<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('stripe_payment_id')->nullable();
            $table->string('shipment_no');
            $table->string('from_address');
            $table->bigInteger('shipping_id');
            $table->decimal('distance',20,10)->nullable();
            $table->string('sender_name')->nullable();
            $table->string('sender_mail')->nullable();
            $table->tinyInteger('is_mail_send')->nullable();
            $table->string('to_address')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('total_item')->nullable();

            $table->bigInteger('drop_off_id')->nullable();
            $table->tinyInteger('is_drop_off')->default(0);
            $table->string('drop_off_address')->nullable();

            $table->string('phone')->nullable();
            $table->string('pickup_time')->nullable();
            $table->string('from_lat')->nullable();
            $table->string('from_lng')->nullable();
            $table->tinyInteger('for_charity')->default()->status('0=not for charity 1=for charity');
            $table->decimal('total_bill',11,3)->default(0.000);
            $table->tinyInteger('payment_status')->default(0)->comment('0=unpaid,1=paid,2=free');
            $table->tinyInteger('status')->default(0)->comment('0=pending,1=picked_up,2=processing ,3=completed');
            $table->timestamp('created_at')->nullable()->default(null);
            $table->unsignedInteger('created_by')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->unsignedInteger('updated_by')->nullable()->default(null);
            $table->tinyInteger('deleted')->default(0)->comment('0=active,1=deleted');
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->unsignedInteger('deleted_by')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}

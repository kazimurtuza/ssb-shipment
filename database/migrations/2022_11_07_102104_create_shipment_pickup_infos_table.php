<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentPickupInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_pickup_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shipping_id')->default(0);
            $table->integer('driver_id');
            $table->string('shipping_code');
            $table->string('pickup_code')->unique();
            $table->date('pickup_date');
            $table->date('shipping_date')->nullable();

            $table->tinyInteger('status')->default(1)->comment('0=pending,1=picked_up,2=processing ,3=completed');
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
        Schema::dropIfExists('shipment_pickup_infos');
    }
}

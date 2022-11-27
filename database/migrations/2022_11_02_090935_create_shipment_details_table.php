<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shipment_id');
            $table->bigInteger('category_id');
            $table->bigInteger('sub_category_id')->nullable();
            $table->string('name');
            $table->integer('quantity');
            $table->integer('weight')->nullable();
            $table->string('size')->nullable();
            $table->decimal('box_length',11,2)->nullable();
            $table->decimal('box_width',11,2)->nullable();
            $table->decimal('box_height',11,2)->nullable();
            $table->decimal('uni_price',11,2)->nullable();
            $table->decimal('total_price',11,2)->nullable();

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
        Schema::dropIfExists('shipment_details');
    }
}

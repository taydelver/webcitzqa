<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_email');
            $table->longText('content');
            $table->unsignedBigInteger('product_id');
            $table->string('contact_name')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_sku')->nullable();
            $table->date('posted_date');
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('storefront_id');
            $table->foreign('storefront_id')->references('id')->on('storefronts');
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
        Schema::dropIfExists('questions');
    }
}

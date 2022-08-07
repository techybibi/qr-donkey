<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('image')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('website_link')->nullable();
            $table->string('google_map_link')->nullable();
            $table->string('address')->nullable();
            $table->boolean('is_redirect')->default(0);
            $table->string('qr');
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
        Schema::dropIfExists('contacts');
    }
}

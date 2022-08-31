<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startup_applies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('email');
            $table->string('phone');
            $table->string('location');
            $table->text('description');
            $table->string('image');
            $table->tinyInteger('status')->default(0);
            $table->string('CeoName');

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
        Schema::dropIfExists('satrtup_applies');
    }
};

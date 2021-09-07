<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienthasservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clienthasservices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clients_id');
            $table->foreign('clients_id')->references('id')->on('clients')
                                            ->onDelete('cascade');
            $table->unsignedBigInteger('services_id');
            $table->foreign('services_id')->references('id')->on('services')
                                            ->onDelete('cascade');

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
        Schema::dropIfExists('clienthasservices');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->string('source');
            $table->timestamps();
        });
        /* 
            create table flights(
                id integer auto_increment primary key ,
                destination varchar(128),
                source varchar(128),
                create_at datetime,
                update_at datetime
            )
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
        /* 
            drop table flights
        */
    }
};

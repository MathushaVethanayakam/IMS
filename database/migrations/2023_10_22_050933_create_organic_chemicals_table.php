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
        Schema::create('organic_chemicals', function (Blueprint $table) {
            $table->id();
            $table->integer('chemical_id');
            $table->string('chemical_name');
            $table->decimal('quantity', 8, 3);
            $table->date('last_update');
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
        Schema::dropIfExists('organic_chemicals');
    }
};

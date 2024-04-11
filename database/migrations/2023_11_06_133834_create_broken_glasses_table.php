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
        Schema::create('broken_glasses', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('reg_no');
            $table->date('date');
            $table->string('recorded_person');
            $table->text('description');
            $table->decimal('amount_to_pay', 10, 2);
            $table->enum('compensation', ['OK', 'Pending'])->default('OK');
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
        Schema::dropIfExists('broken_glasses');
    }
};

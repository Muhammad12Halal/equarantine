<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->unique()->onDelete('cascade');;
            $table->string('name');
            $table->string('address');
            $table->enum('level', ['C1', 'C2A', 'C2B'])->default('C1');
            $table->enum('vaccine', ['Booster', 'Full Vaccine'])->default('Booster');
            $table->enum('type', ['pfizer', 'Sinovac', 'Astrazeneca'])->default('pfizer');
            $table->string('image');
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
        Schema::dropIfExists('covids');
    }
}

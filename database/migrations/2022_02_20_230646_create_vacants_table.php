<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('experience_id')->constained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('location_id')->constrained()->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreignId('salary_id')->constrained()->onDelete('cascade')->onUpdate('cascade');           
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
        Schema::dropIfExists('vacants');
    }
}

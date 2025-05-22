<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nim')->unique(); // NIM should be unique
            $table->string('city'); // Birth Place
            $table->string('birth'); // Birth Date (as string)
            $table->string('sd_info')->nullable();
            $table->string('smp_info')->nullable();
            $table->string('sma_info')->nullable();
            $table->text('achievements')->nullable(); // Can be null if no achievements
            $table->string('photo')->nullable(); // Can be null if no photo
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
        Schema::dropIfExists('members');
    }
}
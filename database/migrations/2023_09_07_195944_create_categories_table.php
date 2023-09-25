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
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('image');
            $table->text('description'); 
            $table->timestamps();
        });

        Schema::create('volnteers', function (Blueprint $table) {
            $table->id();
            $table->string('volunteer_name'); 
            $table->foreignId('category_id')->constrained('categories')->on('categories')->onDelete('cascade');
            $table->text('description'); 
            $table->integer('price');
            $table->mediumText('main_picture');
            $table->timestamps();

        });

        Schema::create('volnteerdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('volunteer_id')->constrained('volnteers');
            $table->bigInteger('price');
            $table->timestamps();
        });

   

        Schema::create('volnteeritems', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('qty');
            $table->bigInteger('number');
            $table->string('location');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('volunteer_id')->constrained('volnteers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volnteeritems');
        Schema::dropIfExists('volnteerdetails');
        Schema::dropIfExists('volnteers');
        Schema::dropIfExists('categories');
    }
};

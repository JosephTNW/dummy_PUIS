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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('userID')->unique()->comment('User ID for the application');
            $table->integer('gpa')->nullable()->comment('GPA of the user');
            $table->string('major')->nullable()->comment('Major of the user');
            $table->string('minor')->nullable()->comment('Minor of the user'); 
            $table->string('graduationYear')->nullable()->comment('Graduation year of the user');
            $table->string('bio')->nullable()->comment('Bio of the user');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

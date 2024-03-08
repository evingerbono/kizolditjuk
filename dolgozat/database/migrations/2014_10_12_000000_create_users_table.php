<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('osztlay_id')->references('osztlay_id')->on('osztalies');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(["name"=>"Első",'password' => Hash::make('diak1'),"email"=>"diak1@gmail.com","osztlay_id" =>1]);
        User::create(["name"=>"Masodik",'password' => Hash::make('diak2'),"email"=>"diak2@gmail.com","osztlay_id" =>2]);
        User::create(["name"=>"Harmadik",'password' => Hash::make('diak3'),"email"=>"diak3@gmail.com","osztlay_id" =>2]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

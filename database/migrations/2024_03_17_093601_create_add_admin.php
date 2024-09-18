<?php

use App\Models\Admin;
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
        Schema::create('add_admin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        $admin  = [
            'name'      => 'haniful',
            'email'     => 'haniful@gmail.com',
            'password'  =>Hash::make(12345678),
            'phone'     => '01568945323',
            'email_verified_at' => now()

        ];

        Admin::create($admin);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_admin');

  }
};

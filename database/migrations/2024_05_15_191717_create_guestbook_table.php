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
        Schema::create('guestbook', function (Blueprint $table) {
            $table->bigIncrements('idguestbook');
            $table->timestamps();
            $table->string('surname');
            $table->string('name');
            $table->string('email');
            $table->text('message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guestbook');
    }
};

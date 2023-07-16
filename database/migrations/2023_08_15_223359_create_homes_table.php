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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->default('Photography_no_border.jpg') ;
            $table->string('image2')->default('icon.jpg');
            $table->string('txt1')->default('قاعة المرج للافراح و اعياد الميلاد');
            $table->string('txt2')->default('هيا واحدة من افضل القاعات');
            $table->string('phone')->default('01200816003');
            $table->string('email')->default('abduhamada6@gmail.com');
            $table->string('address')->default('alex');
            $table->string('facebook')->default('https://www.facebook.com/abdu.mascherino');
            $table->string('instagram')->default('https://www.facebook.com/abdu.mascherino');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};

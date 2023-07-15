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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('course_4.jpg');
            $table->string('txt1')->default('قاعة  مارسليا واحدة من فضل قاعة فلسطين');
            $table->longText('txt2')->default('قاعة مارفيلا في الاسكندرية قاعة ساحرة لاستضافة جميع مناسباتكم وافراحكم, حيث تتوفر جميع الامكانيات اللازمه لذلك و الكوادر المؤهله التي تعمل على تقديم الخدمات على ارفع المعايير حيث تلتزم بالجوده و الاداره و التنفيذ.');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

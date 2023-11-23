<?php
declare(strict_types=1);
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
        Schema::dropIfExists('article');
        Schema::create(
            'article',
            function (Blueprint $table)
            {
                $table->id();
                $table->timestamps();
                $table->string('title');
                $table->string('subTitle');
                $table->string('link');
                $table->string('body');
            }
        );
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};

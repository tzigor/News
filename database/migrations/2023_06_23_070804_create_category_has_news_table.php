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
    public function up()
    {
        Schema::create('category_has_news', static function (Blueprint $table): void {
            $table->foreignId('category_id')
                ->referencies('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreignId('news_id')
                ->referencies('id')
                ->on('news')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_has_news');
    }
};

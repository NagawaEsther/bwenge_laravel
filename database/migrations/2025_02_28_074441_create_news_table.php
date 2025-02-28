<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_news_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Auto incrementing primary key
            $table->string('title'); // Title of the news article
            $table->text('content'); // Content of the news article
            $table->string('image')->nullable(); // Image URL for the news article (optional)
            $table->timestamp('published_at')->nullable(); // Published date of the article
            $table->string('status')->nullable(); // Status of the news article (e.g., published, draft)
            $table->string('category'); // Category of the news article (e.g., Sports, Events)
            $table->text('excerpt')->nullable(); // Excerpt (first 100 characters of the content)
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}

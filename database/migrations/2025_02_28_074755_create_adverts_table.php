<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_adverts_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id(); // Auto incrementing primary key
            $table->string('title'); // Title of the advert
            $table->string('image')->nullable(); // Advert image
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the advert
            $table->date('start_date')->nullable(); // Start date of the advert
            $table->date('end_date')->nullable(); // End date of the advert
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('adverts');
    }
}

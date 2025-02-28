<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_subscribes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribesTable extends Migration
{
    public function up()
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->id(); // Auto incrementing primary key
            $table->string('email')->unique(); // Email of the subscriber (unique)
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscribes');
    }
}

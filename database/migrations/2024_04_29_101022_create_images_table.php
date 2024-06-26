<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        if (Aaran\Aadmin\Src\DbMigration::hasTaskManager()) {

            Schema::create('images', function (Blueprint $table) {
                $table->id();
                $table->foreignId('task_id')->references('id')->on('tasks');
                $table->longText('image');
                $table->timestamps();
            });
        }
    }


    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};

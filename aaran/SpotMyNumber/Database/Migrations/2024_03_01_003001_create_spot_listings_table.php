<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Aaran\Aadmin\Src\DbMigration::hasSpotMyNumber()) {

            Schema::create('spot_listings', function (Blueprint $table) {
                $table->id();
                $table->string('vname')->nullable();
                $table->string('active_id', 3)->nullable();
//                $table->string('star')->nullable();
//                $table->string('rating')->nullable();
//                $table->string('badge')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('spot_listings');
    }
};

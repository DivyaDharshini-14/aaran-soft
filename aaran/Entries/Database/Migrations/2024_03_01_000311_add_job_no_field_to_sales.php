<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Aaran\Aadmin\Src\DbMigration::hasCurrentVersion()) {
            Schema::table('sales', function (Blueprint $table) {
                $table->string('job_no')->nullable()->after('despatch_id');
            });
        }
    }

    public function down(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropColumn('job_no');
        });
    }
};

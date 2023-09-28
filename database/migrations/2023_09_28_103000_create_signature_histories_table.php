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
        Schema::create('signature_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'signature_id')->constrained();
            $table->timestamp(column:'last_updated_at');
            $table->integer(column:'old_plan_id');
            $table->smallInteger(column:"old_status");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signature_histories');
    }
};

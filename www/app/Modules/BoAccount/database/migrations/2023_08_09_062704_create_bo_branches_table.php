<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('bo_branches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('broker_id')->default(1);
            $table->string('name', 80)->index();
            $table->string('short_code', 20)->index();
            $table->string('prefix', 10)->nullable();
            $table->string('contact_person', 200);
            $table->string('contact_no', 20);
            $table->string('phone', 20);
            $table->string('email', 80);
            $table->string('address', 255);
            $table->enum('exchange_name', ['DSE', 'CSE'])->default('DSE')->index();
            $table->enum('type', ['Branch', 'Digital Booth', 'Extension'])->default('Branch')->index();
            $table->enum('status', ['Active', 'Inactive'])->default('Active')->index();
            $table->foreignId('created_by')->nullable()->comment('0 for system');
            $table->foreignId('updated_by')->nullable()->comment('0 for system');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('bo_branches');
    }
};

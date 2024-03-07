<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('bo_authorize_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('courtesy_title', 10)->nullable()->comment('Mr/Mrs/Ms/Dr');
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->string('occupation', 64)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nid', 20)->nullable();
            $table->string('father_name', 64)->nullable();
            $table->string('mother_name', 64)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('city', 25)->nullable();
            $table->string('post_code', 10)->nullable();
            $table->string('division', 25)->nullable();
            $table->string('country', 64)->nullable();
            $table->string('email', 80)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('bo_authorize_information');
    }
};

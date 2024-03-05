<?php

use App\Modules\BoAccount\Enums\NomineeTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('bo_nominee_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->enum('type', NomineeTypeEnum::getValues())->default(NomineeTypeEnum::Nominee_1_Of_Acc_Holder);
            $table->string('courtesy_title', 10)->nullable()->comment('Mr/Mrs/Ms/Dr');
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->string('relationship', 100)->nullable();
            $table->string('percentage', 10)->default(10);
            $table->enum('residency', ['Resident', 'Non Resident'])->default("Resident");
            $table->date('date_of_birth')->nullable();
            $table->date('maturity_date_of_minor')->nullable();
            $table->string('nid', 20)->nullable();
            $table->string('address', 255)->nullable();            
            $table->string('city', 25)->nullable();
            $table->string('post_code', 10)->nullable();
            $table->string('division', 25)->nullable();
            $table->string('country', 64)->nullable();
            $table->string('email', 80)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('fax', 20)->nullable(); 
            $table->boolean('status')->default(true); 
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('bo_nominee_information')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('bo_nominee_information');
    }
};

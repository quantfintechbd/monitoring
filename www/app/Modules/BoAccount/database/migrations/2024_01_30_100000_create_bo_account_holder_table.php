<?php

use App\Modules\BoAccount\Enums\GenderTypeEnum;
use App\Modules\BoAccount\Enums\BoTypeEnum;
use App\Modules\BoAccount\Enums\ResidentialStatusEnum;
use App\Modules\BoAccount\Enums\StockExchangeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoAccountHolderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bo_account_holder', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->enum('type_of_client', BoTypeEnum::getValues())->default(BoTypeEnum::Individual)->comment('01-Individual,02-Company,03-Joint');
            $table->string('courtesy_title', 10)->nullable()->comment('Mr/Mrs/Ms/Dr');
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->string('occupation', 64)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('father_name', 64)->nullable();
            $table->string('mother_name', 64)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('city', 25)->nullable();
            $table->string('post_code', 10)->nullable();
            $table->string('division', 25)->nullable();
            $table->string('country', 64)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('email', 80)->nullable();
            $table->string('nationality', 20)->nullable();
            $table->string('nid', 20)->nullable();
            $table->string('tin', 50)->nullable();
            $table->enum('gender', [GenderTypeEnum::getValues()])->nullable();
            $table->enum('residency', [ResidentialStatusEnum::getValues()])->default(ResidentialStatusEnum::Resident);
            $table->string('branch', 80)->nullable();
            $table->enum('stock_exchange', [StockExchangeEnum::getValues()])->default(StockExchangeEnum::DSE);
            $table->boolean('is_director')->default(false);
            $table->string('director_company', 255)->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('bo_account_holder')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bo_account_holder');
    }
}

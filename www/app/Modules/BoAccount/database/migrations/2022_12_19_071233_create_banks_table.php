<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->unique()->index();
            $table->string('swift_code', 50)->unique()->index();
            $table->string('npsb_code', 4)->unique()->index();
            $table->string('logo', 191)->default('images/bank/bank_default_image.png');
            $table->tinyInteger('is_unverified_account_registration_allowed')->default(0);
            $table->tinyInteger('is_account_register_allowed')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('is_account_opening_allowed')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('is_eft_push_allowed')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('is_eft_pull_allowed')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('is_benificiary_required')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('is_vcard_opening_allowed')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('is_loan_apply_allowed')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('status')->default(0)->comment('0=Inactive, 1=Active');
            $table->text('credentials')->nullable();
            $table->text('additional_data')->nullable();
            $table->string('api_token', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->foreignId('created_by')->nullable()->comment('0 for system');
            $table->foreignId('updated_by')->nullable()->comment('0 for system');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks');
    }
}

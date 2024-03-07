<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_id')->index();
            $table->string('branch_code', 20)->index();
            $table->string('branch_name', 200);
            $table->string('routing_number', 20)->index();
            $table->text('address')->nullable();
            $table->text('additional_data')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=Inactive, 1=Active')->index();
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
        Schema::dropIfExists('bank_branches');
    }
}

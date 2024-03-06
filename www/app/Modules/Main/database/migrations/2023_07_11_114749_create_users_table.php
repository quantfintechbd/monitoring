<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 50)->nullable()->unique();
            $table->string('password')->nullable();
            $table->string('name', 128)->index();
            $table->string('email', 128)->index();
            $table->string('mobile', 20)->index();
            $table->string('nid', 20)->index();
            $table->date('date_of_birth');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('api_token', 100)->nullable();
            $table->enum('status', ['Pending', 'Verified', 'Processing', 'Completed'])->default('Pending')->index();
            $table->rememberToken();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

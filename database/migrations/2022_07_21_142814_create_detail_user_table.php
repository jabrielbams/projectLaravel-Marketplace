<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->index('fk_detail_user_to_users');
            $table->foreignId('study_program_id')->nullable()->index('fk_detail_user_to_study_program');
            $table->longText("photo")->nullable();
            $table->string("contact_number")->nullable();
            $table->longText("biography")->nullable();
            $table->string("completion_year")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('detail_user');
    }
};

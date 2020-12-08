<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('father_name');
            $table->date('date_of_birth');
            $table->string('grand_father_name');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('passport_number');
            $table->date('date_of_issue');
            $table->date('date_of_expire');
            $table->string('visa_issue_place');
            $table->enum('married', ['0', '1']);
            $table->string('perfered_subject');
            $table->string('perfered_grade');
            $table->string('grade');
            $table->string('iran_number')->unique();
            $table->string('whatsapp_number')->unique();
            $table->string('address');
            $table->string('name_of_expeditor');
            $table->string('code_of_expeditor');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('tracking_code');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
}

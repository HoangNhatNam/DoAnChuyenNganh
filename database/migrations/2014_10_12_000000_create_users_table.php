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
            $table->bigIncrements('id');
            $table->string('FullName');
            $table->string('Certificate');
            $table->string('[Level]');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Address');
            $table->string('Phone');
            $table->string('Org');
            $table->string('Office')->nullable();
            $table->string('Position')->nullable();
            $table->string('Detail')->nullable();
            $table->string('password');
            $table->boolean('Active')->nullable();
            $table->integer('Type')->nullable();
            $table->dateTime('CreatedDate')->nullable();
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

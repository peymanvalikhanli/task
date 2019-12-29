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
            $table->string('UserName', 50);
            $table->string('Password', 150);
            $table->string('Avatar', 150);
            $table->string('Token', 100);
            $table->bigInteger('UserID');
            $table->integer('OfficePosition')->unsigned();
            $table->text('ServerRef');
            $table->timestamp('LastLogin')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('IsOnline')->unsigned();
            $table->timestamp('ModifyDate')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('CreationDate')->default(\DB::raw('CURRENT_TIMESTAMP'));
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

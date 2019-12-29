<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatGroupUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_group__users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ChatGroupID')->nullable();
            
            $table->string('Name', 50)->nullable();
            $table->timestamp('CreationDate')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('chat_group__users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name', 50);
            $table->bigInteger('Owner');
            $table->boolean('IsDelete')->default(false);
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
        Schema::dropIfExists('chat_groups');
    }
}

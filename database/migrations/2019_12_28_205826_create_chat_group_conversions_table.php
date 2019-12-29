<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatGroupConversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_group_conversions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('From');
            $table->bigInteger('TO');
            $table->string('Title', 50);
            $table->mediumText('Content');
            $table->integer('ChatType');
            $table->string('File', 150);
            $table->boolean('IsDelete')->default(false);
            $table->timestamp('SeenDate')->default(\DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('chat_group_conversions');
    }
}

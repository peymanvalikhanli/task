<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatP2PSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_p2_p_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('From')->nullable();
            $table->bigInteger('TO')->nullable();
            $table->string('Title', 50)->nullable();
            $table->mediumText('Content')->nullable();
            $table->integer('ChatType')->unsigned()->nullable();
            $table->string('File', 150)->nullable();
            $table->boolean('IsDelete')->nullable()->default(false);
            $table->timestamp('SeenDate')->nullable();
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
        Schema::dropIfExists('chat_p2_p_s');
    }
}

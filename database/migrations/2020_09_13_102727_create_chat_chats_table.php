<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_message_id');
            $table->foreignId('chat_session_id');
            $table->foreignId('user_id');
            $table->boolean('type'); // 0 is for send and 1 is for receive
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
        Schema::dropIfExists('chat_chats');
    }
}

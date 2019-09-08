<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            // 外部キーを追加
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }
    //
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

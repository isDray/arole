<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOriginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origin', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', 60);        // 葡萄名稱
            $table->boolean('status');       // 狀態
            $table->longText('description'); // 葡萄描述
            $table->string('pic_name',100);
            $table->integer('sort');         // 由南至北排序
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
        Schema::dropIfExists('origin');
    }
}

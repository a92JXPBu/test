<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->text('name');
            $table->text('image');
        });
        DB::table('groups')->insert(
            array(
                [
                    'id' => 1,
                    'name' => 'Мышки',
                    'image' => 'https://www.1a.lv/images/products/000595/436054_large.jpg',
                ],
                [
                    'id' => 2,
                    'name' => 'Клавиатуры',
                    'image' => 'https://www.1a.lv/images/products/001856/1357565_large.jpg',
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}

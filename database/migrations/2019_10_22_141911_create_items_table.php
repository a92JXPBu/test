<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('group_id');
            $table->text('name');
            $table->text('description');
            $table->integer('price');
            $table->text('image');
        });
        DB::table('items')->insert(
            array(
                [
                    'group_id' => 1,
                    'name' => 'MX MASTER 3',
                    'description' => 'Advanced Ergonomic Mouse',
                    'price' => 9999,
                    'image' => 'https://www.logitech.com/assets/65776/73/mx-master-3.png'
                ],
                [
                    'group_id' => 1,
                    'name' => 'MX Vertical',
                    'description' => 'The Master Series',
                    'price' => 7777,
                    'image' => 'https://www.logitech.com/assets/65520/20/mx-vertical-pdp.png'
                ],
                [
                    'group_id' => 2,
                    'name' => 'Esperanza EK129 Florida Keyboard',
                    'description' => '',
                    'price' => 100,
                    'image' => 'https://www.1a.lv/images/products/000475/347734_small.jpg'
                ],
                [
                    'group_id' => 2,
                    'name' => 'Fury Hornet Gaming Keyboard US Black',
                    'description' => '',
                    'price' => 150,
                    'image' => 'https://www.1a.lv/images/products/001150/841294_small.jpg'
                ],
                [
                    'group_id' => 2,
                    'name' => 'iBOX Office Kit II Keyboard + Mouse',
                    'description' => '',
                    'price' => 500,
                    'image' => 'https://www.1a.lv/images/products/000768/562532_small.jpg'
                ],
                [
                    'group_id' => 2,
                    'name' => 'Omega Keybord ENG /​ RUS Black',
                    'description' => '',
                    'price' => 570,
                    'image' => 'https://www.1a.lv/images/products/001449/1059032_small.jpg'
                ],
                [
                    'group_id' => 2,
                    'name' => 'Esperanza Titanum TK103 Slim Black',
                    'description' => '',
                    'price' => 550,
                    'image' => 'https://www.1a.lv/images/products/000355/259321_small.jpg'
                ],
                [
                    'group_id' => 2,
                    'name' => 'Esperanza EK130B Blue',
                    'description' => '',
                    'price' => 530,
                    'image' => 'https://www.1a.lv/images/products/000768/561944_small.jpg'
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
        Schema::dropIfExists('items');
    }
}

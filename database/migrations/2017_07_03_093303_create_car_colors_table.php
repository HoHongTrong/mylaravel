<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//php artisan make:migration create_ten-bang_table --create=ten-bang
//php artisan migrate:rollback (quay lại hành động vừa thực hiện)
//php artisan migrate (cập nhật lại migrate)
class CreateCarColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id');
            $table->integer('color_id');
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
        Schema::drop('car_colors');
    }
}

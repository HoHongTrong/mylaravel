<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//php artisan make:migration create_ten-bang_table --create=ten-bang
//php artisan migrate:rollback (quay lại hành động vừa thực hiện)
//php artisan migrate (cập nhật lại migrate)
class CreateInsertColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hctorm', function ($table) {
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('insert-column');
    }
}

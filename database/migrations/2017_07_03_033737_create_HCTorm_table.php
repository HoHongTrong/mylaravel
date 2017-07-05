<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHCTormTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('HCTorm', function (Blueprint $table) {
      $table->increments('id');
      $table->string('monhocgi');
      $table->integer('giatien');
      $table->string('tennguoiday');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('HCTorm');
  }
}

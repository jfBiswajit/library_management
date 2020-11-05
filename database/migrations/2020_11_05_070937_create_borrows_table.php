<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('borrows', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('borrowed_by');
      $table->integer('book');
      $table->boolean('is_returned');
      $table->date('return_date');
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
    Schema::dropIfExists('borrow');
  }
}

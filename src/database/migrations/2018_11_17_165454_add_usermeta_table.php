<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsermetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('usermeta', function(Blueprint $table)
  		{
  			$table->bigIncrements('id');
  			$table->bigInteger('user_id');
  			$table->string('meta_key');
  			$table->text('meta_value');
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
      Schema::drop('usermeta');
    }
}

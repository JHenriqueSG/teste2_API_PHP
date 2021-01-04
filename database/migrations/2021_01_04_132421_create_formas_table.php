<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormasTable extends Migration
{
  
    public function up()
    {
        Schema::create('formas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('base');
            $table->float('altura');
            $table->float('area');
        });
    }

    public function down()
    {
        Schema::dropIfExists('formas');
    }
}

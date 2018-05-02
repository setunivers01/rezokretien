<?php namespace Rezokretien\Music\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezokretienMusic extends Migration
{
    public function up()
    {
        Schema::create('rezokretien_music_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('artist')->nullable();
            $table->string('album')->nullable();
            $table->string('genre');
            $table->date('date')->nullable();
            $table->string('duration')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezokretien_music_');
    }
}

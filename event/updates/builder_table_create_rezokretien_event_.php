<?php namespace Rezokretien\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezokretienEvent extends Migration
{
    public function up()
    {
        Schema::create('rezokretien_event_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('venue', 255)->nullable();
            $table->string('vente', 255)->nullable();
            $table->string('admission', 255)->nullable();
            $table->text('content')->nullable();
            $table->string('validation', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezokretien_event_');
    }
}

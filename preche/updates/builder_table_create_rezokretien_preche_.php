<?php namespace Rezokretien\Preche\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezokretienPreche extends Migration
{
    public function up()
    {
        Schema::create('rezokretien_preche_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191)->nullable();
            $table->string('auteur', 191)->nullable();
            $table->dateTime('date')->nullable();
            $table->string('duration', 191)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezokretien_preche_');
    }
}

<?php namespace Rezokretien\Verset\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteRezokretienVerset extends Migration
{
    public function up()
    {
        Schema::dropIfExists('rezokretien_verset_');
    }
    
    public function down()
    {
        Schema::create('rezokretien_verset_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre_verset', 191)->nullable();
            $table->text('versert')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('passage', 191)->nullable();
        });
    }
}

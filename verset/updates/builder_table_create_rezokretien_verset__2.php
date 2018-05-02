<?php namespace Rezokretien\Verset\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRezokretienVerset2 extends Migration
{
    public function up()
    {
        Schema::create('rezokretien_verset_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre_verset', 191)->nullable();
            $table->string('passage', 191)->nullable();
            $table->text('verset')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rezokretien_verset_');
    }
}

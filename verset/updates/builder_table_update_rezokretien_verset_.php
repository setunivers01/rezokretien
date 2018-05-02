<?php namespace Rezokretien\Verset\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezokretienVerset extends Migration
{
    public function up()
    {
        Schema::table('rezokretien_verset_', function($table)
        {
            $table->string('passage', 191)->nullable();
            $table->renameColumn('titre', 'titre_verset');
            $table->renameColumn('verset', 'versert');
        });
    }
    
    public function down()
    {
        Schema::table('rezokretien_verset_', function($table)
        {
            $table->dropColumn('passage');
            $table->renameColumn('titre_verset', 'titre');
            $table->renameColumn('versert', 'verset');
        });
    }
}

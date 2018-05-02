<?php namespace Rezokretien\Predication\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezokretienPredication extends Migration
{
    public function up()
    {
        Schema::table('rezokretien_predication_', function($table)
        {
            $table->renameColumn('auteur', 'pasteur');
            $table->renameColumn('date', 'heure');
        });
    }
    
    public function down()
    {
        Schema::table('rezokretien_predication_', function($table)
        {
            $table->renameColumn('pasteur', 'auteur');
            $table->renameColumn('heure', 'date');
        });
    }
}

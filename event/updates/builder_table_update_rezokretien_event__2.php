<?php namespace Rezokretien\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezokretienEvent2 extends Migration
{
    public function up()
    {
        Schema::table('rezokretien_event_', function($table)
        {
            $table->renameColumn('validation', 'validate');
        });
    }
    
    public function down()
    {
        Schema::table('rezokretien_event_', function($table)
        {
            $table->renameColumn('validate', 'validation');
        });
    }
}

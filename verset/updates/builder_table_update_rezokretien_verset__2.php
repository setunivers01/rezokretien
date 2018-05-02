<?php namespace Rezokretien\Verset\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezokretienVerset2 extends Migration
{
    public function up()
    {
        Schema::table('rezokretien_verset_', function($table)
        {
            $table->dateTime('date_verset')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('rezokretien_verset_', function($table)
        {
            $table->dropColumn('date_verset');
        });
    }
}

<?php namespace Rezokretien\Music\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRezokretienMusic extends Migration
{
    public function up()
    {
        Schema::table('rezokretien_music_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title')->change();
            $table->string('artist')->change();
            $table->string('album')->change();
            $table->string('genre')->change();
            $table->string('duration')->change();
        });
    }
    
    public function down()
    {
        Schema::table('rezokretien_music_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('title', 191)->change();
            $table->string('artist', 191)->change();
            $table->string('album', 191)->change();
            $table->string('genre', 191)->change();
            $table->string('duration', 191)->change();
        });
    }
}

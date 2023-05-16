<?php namespace Admin\setvices\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAdminSetvices extends Migration
{
    public function up()
    {
        Schema::table('admin_setvices_', function($table)
        {
            $table->text('icon');
        });
    }
    
    public function down()
    {
        Schema::table('admin_setvices_', function($table)
        {
            $table->dropColumn('icon');
        });
    }
}

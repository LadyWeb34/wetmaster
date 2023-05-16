<?php namespace Admin\feedbacks\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAdminFeedbacks extends Migration
{
    public function up()
    {
        Schema::table('admin_feedbacks_', function($table)
        {
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::table('admin_feedbacks_', function($table)
        {
            $table->dropColumn('status');
        });
    }
}

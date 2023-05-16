<?php namespace Admin\feedbacks\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAdminFeedbacks extends Migration
{
    public function up()
    {
        Schema::create('admin_feedbacks_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_feedbacks_');
    }
}

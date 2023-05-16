<?php namespace Admin\teams\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAdminTeams extends Migration
{
    public function up()
    {
        Schema::create('admin_teams_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('position');
            $table->string('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_teams_');
    }
}

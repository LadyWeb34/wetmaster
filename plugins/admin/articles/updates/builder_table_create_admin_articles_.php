<?php namespace Admin\articles\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAdminArticles extends Migration
{
    public function up()
    {
        Schema::create('admin_articles_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->string('slug');
            $table->boolean('status');
            $table->text('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_articles_');
    }
}

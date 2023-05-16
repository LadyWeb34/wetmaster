<?php namespace Admin\setvices\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAdminSetvices extends Migration
{
    public function up()
    {
        Schema::create('admin_setvices_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('small_descr');
            $table->text('content');
            $table->string('slug');
            $table->text('image');
            $table->boolean('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_setvices_');
    }
}

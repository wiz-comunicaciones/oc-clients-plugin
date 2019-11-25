<?php namespace Wiz\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration101 extends Migration
{
    public function up()
    {
        Schema::create('wiz_clients_clients', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('url')->nullable();
            $table->boolean('is_visible')->default(1);
            $table->boolean('is_external')->default(0);
            $table->integer('parent_id')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->integer('author_id')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wiz_clients_clients');
    }
}
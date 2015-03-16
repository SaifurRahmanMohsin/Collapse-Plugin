<?php namespace Mohsin\Collapse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEntriesTable extends Migration
{

    public function up()
    {
        Schema::create('mohsin_collapse_entries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('collapse_id')->default(0);
            $table->integer('position')->default(0);
            $table->string('title');
            $table->longText('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mohsin_collapse_entries');
    }

}

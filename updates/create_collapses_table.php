<?php namespace Mohsin\Collapse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCollapsesTable extends Migration
{

    public function up()
    {
        Schema::create('mohsin_collapse_collapses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mohsin_collapse_collapses');
    }

}

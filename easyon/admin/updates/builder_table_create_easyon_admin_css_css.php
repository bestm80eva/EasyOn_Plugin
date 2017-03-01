<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminCssCss extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_css_css', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('css_id')->unsigned();
            $table->integer('css_parent_id');
            $table->integer('css_client_id');
            $table->string('css_paramter_name', 60);
            $table->integer('css_parameter_type');
            $table->integer('css_paramter_no');
            $table->text('css_xml_data');
            $table->boolean('css_isactive');
            $table->dateTime('css_created');
            $table->integer('css_created_usr_id');
            $table->dateTime('css_modified')->nullable();
            $table->integer('css_modified_usr_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_css_css');
    }
}

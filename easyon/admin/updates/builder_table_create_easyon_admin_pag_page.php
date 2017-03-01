<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminPagPage extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_pag_page', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('pag_id')->unsigned();
            $table->integer('pag_parent_id');
            $table->integer('pag_client_id');
            $table->string('pag_parameter_name', 60);
            $table->integer('pag_parameter_type');
            $table->integer('pag_parameter_id');
            $table->text('pag_xml_data');
            $table->boolean('pag_isactive');
            $table->dateTime('pag_created_at');
            $table->integer('pag_created_usr_id');
            $table->dateTime('pag_updated_at');
            $table->integer('pag_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_pag_page');
    }
}

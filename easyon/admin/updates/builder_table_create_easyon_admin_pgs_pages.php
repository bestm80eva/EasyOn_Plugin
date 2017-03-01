<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminPgsPages extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_pgs_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('pgs_id')->unsigned();
            $table->integer('pgs_pagegroup_pgp_id');
            $table->integer('pgs_client_id');
            $table->string('pgs_name', 50);
            $table->integer('pgs_page_no');
            $table->integer('pgs_parameter_id');
            $table->integer('pgs_delay');
            $table->boolean('pgs_isactive');
            $table->dateTime('pgs_created_at');
            $table->integer('pgs_created_usr_id');
            $table->dateTime('pgs_updated_at');
            $table->integer('pgs_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_pgs_pages');
    }
}

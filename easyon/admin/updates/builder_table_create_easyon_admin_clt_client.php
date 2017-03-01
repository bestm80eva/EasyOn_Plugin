<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminCltClient extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_clt_client', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('clt_id')->unsigned();
            $table->string('clt_name', 60);
            $table->dateTime('clt_join_date');
            $table->string('clt_email', 100);
            $table->integer('clt_status');
            $table->boolean('clt_isactive');
            $table->boolean('clt_activation');
            $table->dateTime('clt_created_at');
            $table->integer('clt_created_usr_id');
            $table->dateTime('clt_updated_at');
            $table->integer('clt_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_clt_client');
    }
}

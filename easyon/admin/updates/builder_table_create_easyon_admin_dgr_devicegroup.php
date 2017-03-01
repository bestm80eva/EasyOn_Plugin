<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminDgrDevicegroup extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_dgr_devicegroup', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('dgr_id')->unsigned();
            $table->string('dgr_groupname', 40);
            $table->integer('dgr_pagegroup_id');
            $table->integer('dgr_sitetheme_sth_id');
            $table->integer('dgr_client_id');
            $table->boolean('dgr_isactive');
            $table->dateTime('dgr_created_at');
            $table->integer('dgr_created_usr_id');
            $table->dateTime('dgr_updated_at');
            $table->integer('dgr_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_dgr_devicegroup');
    }
}

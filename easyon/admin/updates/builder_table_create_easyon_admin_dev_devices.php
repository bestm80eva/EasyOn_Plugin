<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminDevDevices extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_dev_devices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('dev_id')->unsigned();
            $table->string('dev_name', 60)->nullable();
            $table->string('dev_ipaddr', 20);
            $table->string('dev_remote_addr', 20);
            $table->integer('dev_client_id');
            $table->integer('dev_devicegroup_id');
            $table->integer('dev_nextpage_no');
            $table->integer('dev_res_x');
            $table->integer('dev_res_y');
            $table->boolean('dev_isactive');
            $table->dateTime('dev_created');
            $table->integer('dev_created_usr_id');
            $table->dateTime('dev_modified');
            $table->integer('dev_modified_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_dev_devices');
    }
}

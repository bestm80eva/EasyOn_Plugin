<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminCfgConfig extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_cfg_config', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('cfg_id')->unsigned();
            $table->string('cfg_name');
            $table->text('cfg_value');
            $table->dateTime('cfg_created');
            $table->integer('cfg_created_usr_id');
            $table->dateTime('cfg_modified');
            $table->integer('cfg_modified_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_cfg_config');
    }
}

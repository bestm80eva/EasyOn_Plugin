<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminIcpIdecomponents extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_icp_idecomponents', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('icp_id')->unsigned();
            $table->string('icp_name', 60);
            $table->string('icp_icon_name', 60);
            $table->text('icp_xml_data');
            $table->dateTime('icp_created_at');
            $table->integer('icp_created_usr_id');
            $table->dateTime('icp_updated_at');
            $table->integer('icp_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_icp_idecomponents');
    }
}

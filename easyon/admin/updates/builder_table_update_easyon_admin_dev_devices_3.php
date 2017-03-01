<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminDevDevices3 extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_dev_devices', function($table)
        {
            $table->renameColumn('dev_devicegroup_id', 'dev_devicegroup_dgr_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_dev_devices', function($table)
        {
            $table->renameColumn('dev_devicegroup_dgr_id', 'dev_devicegroup_id');
        });
    }
}

<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminDevDevices2 extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_dev_devices', function($table)
        {
            $table->renameColumn('dev_client_id', 'dev_client_clt_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_dev_devices', function($table)
        {
            $table->renameColumn('dev_client_clt_id', 'dev_client_id');
        });
    }
}

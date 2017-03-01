<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminDgrDevicegroup extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_dgr_devicegroup', function($table)
        {
            $table->renameColumn('dgr_client_id', 'dgr_client_clt_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_dgr_devicegroup', function($table)
        {
            $table->renameColumn('dgr_client_clt_id', 'dgr_client_id');
        });
    }
}

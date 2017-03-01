<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminLogLog extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_log_log', function($table)
        {
            $table->renameColumn('log_client_id', 'log_client_clt_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_log_log', function($table)
        {
            $table->renameColumn('log_client_clt_id', 'log_client_id');
        });
    }
}

<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminCfgConfig2 extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_cfg_config', function($table)
        {
            $table->renameColumn('cfg_modified_at', 'cfg_updated_at');
            $table->renameColumn('cfg_modified_usr_id', 'cfg_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_cfg_config', function($table)
        {
            $table->renameColumn('cfg_updated_at', 'cfg_modified_at');
            $table->renameColumn('cfg_updated_usr_id', 'cfg_modified_usr_id');
        });
    }
}

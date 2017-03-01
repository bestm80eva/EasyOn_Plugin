<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminCfgConfig extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_cfg_config', function($table)
        {
            $table->dateTime('cfg_created_at');
            $table->dateTime('cfg_modified_at');
            $table->dropColumn('cfg_created');
            $table->dropColumn('cfg_modified');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_cfg_config', function($table)
        {
            $table->dropColumn('cfg_created_at');
            $table->dropColumn('cfg_modified_at');
            $table->dateTime('cfg_created');
            $table->dateTime('cfg_modified');
        });
    }
}

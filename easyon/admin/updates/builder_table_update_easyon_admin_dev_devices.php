<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminDevDevices extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_dev_devices', function($table)
        {
            $table->dateTime('dev_created_at');
            $table->dateTime('dev_updated_at');
            $table->renameColumn('dev_modified_usr_id', 'dev_updated_usr_id');
            $table->dropColumn('dev_created');
            $table->dropColumn('dev_modified');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_dev_devices', function($table)
        {
            $table->dropColumn('dev_created_at');
            $table->dropColumn('dev_updated_at');
            $table->renameColumn('dev_updated_usr_id', 'dev_modified_usr_id');
            $table->dateTime('dev_created');
            $table->dateTime('dev_modified');
        });
    }
}

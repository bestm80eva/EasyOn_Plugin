<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminPgsPages extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_pgs_pages', function($table)
        {
            $table->renameColumn('pgs_client_id', 'pgs_client_clt_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_pgs_pages', function($table)
        {
            $table->renameColumn('pgs_client_clt_id', 'pgs_client_id');
        });
    }
}

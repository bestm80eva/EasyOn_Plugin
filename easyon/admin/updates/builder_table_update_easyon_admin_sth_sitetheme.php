<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminSthSitetheme extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_sth_sitetheme', function($table)
        {
            $table->renameColumn('sth_client_id', 'sth_client_clt_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_sth_sitetheme', function($table)
        {
            $table->renameColumn('sth_client_clt_id', 'sth_client_id');
        });
    }
}

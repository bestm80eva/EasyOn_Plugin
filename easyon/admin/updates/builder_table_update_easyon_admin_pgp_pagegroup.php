<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminPgpPagegroup extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_pgp_pagegroup', function($table)
        {
            $table->renameColumn('pgp_client_id', 'pgp_client_clt_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_pgp_pagegroup', function($table)
        {
            $table->renameColumn('pgp_client_clt_id', 'pgp_client_id');
        });
    }
}

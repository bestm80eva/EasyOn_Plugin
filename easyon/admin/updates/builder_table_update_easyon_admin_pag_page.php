<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminPagPage extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_pag_page', function($table)
        {
            $table->renameColumn('pag_client_id', 'pag_client_clt_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_pag_page', function($table)
        {
            $table->renameColumn('pag_client_clt_id', 'pag_client_id');
        });
    }
}

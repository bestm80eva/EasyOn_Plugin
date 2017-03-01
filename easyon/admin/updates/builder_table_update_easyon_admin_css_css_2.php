<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminCssCss2 extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_css_css', function($table)
        {
            $table->renameColumn('css_client_id', 'css_client_clt_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_css_css', function($table)
        {
            $table->renameColumn('css_client_clt_id', 'css_client_id');
        });
    }
}

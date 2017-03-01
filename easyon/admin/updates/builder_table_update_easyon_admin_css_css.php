<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEasyonAdminCssCss extends Migration
{
    public function up()
    {
        Schema::table('easyon_admin_css_css', function($table)
        {
            $table->renameColumn('css_created', 'css_created_at');
            $table->renameColumn('css_modified', 'css_updated_at');
            $table->renameColumn('css_modified_usr_id', 'css_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::table('easyon_admin_css_css', function($table)
        {
            $table->renameColumn('css_created_at', 'css_created');
            $table->renameColumn('css_updated_at', 'css_modified');
            $table->renameColumn('css_updated_usr_id', 'css_modified_usr_id');
        });
    }
}

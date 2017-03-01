<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminSthSitetheme extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_sth_sitetheme', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('sth_id')->unsigned();
            $table->integer('sth_client_id');
            $table->string('sth_name', 60);
            $table->integer('sth_pagegroup_pgp_id');
            $table->boolean('sth_isactive');
            $table->dateTime('sth_created_at');
            $table->integer('sth_created_usr_id');
            $table->dateTime('sth_updated_at');
            $table->integer('sth_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_sth_sitetheme');
    }
}

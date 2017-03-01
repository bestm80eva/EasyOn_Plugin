<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminPgpPagegroup extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_pgp_pagegroup', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('pgp_id')->unsigned();
            $table->string('pgp_name', 40);
            $table->integer('pgp_client_id');
            $table->dateTime('pgp_created_at');
            $table->integer('pgp_created_usr_id');
            $table->dateTime('pgp_updated_at');
            $table->integer('pgp_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_pgp_pagegroup');
    }
}

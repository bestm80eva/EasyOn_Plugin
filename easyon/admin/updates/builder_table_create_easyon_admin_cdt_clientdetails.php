<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminCdtClientdetails extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_cdt_clientdetails', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('cdt_id')->unsigned();
            $table->integer('cdt_client_clt_id');
            $table->string('cdt_forename', 60);
            $table->string('cdt_surname', 60);
            $table->string('cdt_gender', 10);
            $table->string('cdt_birthplace', 40);
            $table->dateTime('cdt_birthdate');
            $table->string('cdt_addr', 60);
            $table->string('cdt_city', 60);
            $table->string('cdt_county', 60);
            $table->string('cdt_country', 60);
            $table->string('cdt_postcode', 40);
            $table->dateTime('cdt_created_at');
            $table->integer('cdt_created_usr_id');
            $table->dateTime('cdt_updated_at');
            $table->integer('cdt_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_cdt_clientdetails');
    }
}

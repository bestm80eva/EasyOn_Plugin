<?php namespace Easyon\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEasyonAdminMenMenus extends Migration
{
    public function up()
    {
        Schema::create('easyon_admin_men_menus', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('men_id')->unsigned();
            $table->string('men_menu_name', 50);
            $table->string('men_admin_menu', 50);
            $table->integer('men_parent_id');
            $table->boolean('men_sub');
            $table->string('men_menytype', 50);
            $table->text('men_menuvalue');
            $table->string('men_class', 100);
            $table->integer('men_orderby');
            $table->dateTime('men_created_at');
            $table->integer('men_created_usr_id');
            $table->dateTime('men_updated_at');
            $table->integer('men_updated_usr_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('easyon_admin_men_menus');
    }
}

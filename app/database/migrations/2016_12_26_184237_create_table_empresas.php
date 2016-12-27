<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpresas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create("tbl_empresas", function (Blueprint $table){
	        $table->increments("id");
            $table->string("nombre", 100);
            $table->string("razon_social", 140);
            $table->dateTime("fecha_creacion");
            $table->integer("trabajadores");
            $table->string("rfc",13);
            $table->boolean("estado")->default("1");
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("tbl_empresas");
	}

}

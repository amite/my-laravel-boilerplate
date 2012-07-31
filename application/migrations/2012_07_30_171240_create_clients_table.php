<?php

class Create_Clients_Table {

	public function up()
	{
		Schema::create('clients', function($table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->text('notes');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}

}
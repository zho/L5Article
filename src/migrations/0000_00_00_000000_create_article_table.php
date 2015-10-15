<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
	public function up()
	{
		Schema::create('articles', function(Blueprint $t)
		{
			$t->increments('id')->unsigned();
			$t->text('title', 255);
			$t->text('teaser', 255);
			$t->text('body', 255);
			$t->timestamps();
		});
	}
	public function down()
	{
		Schema::drop('articles');
	}
}
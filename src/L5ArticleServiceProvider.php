<?php

namespace zho\L5Article;


use Illuminate\Support\ServiceProvider;

class L5ArticleServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->bind("l5article", function($app){
			return new L5Article;
		});
	}

	public function boot() {
		require __DIR__ . "/Http/routes.php";

		$this->loadViewsFrom(__DIR__ . "/../views", 'l5article');

		$this->publishes([
			__DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
		], 'migrations');

	}
}
<?php namespace Devine\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class LinkRepositoryServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Devine\Repositories\LinkRepositoryInterface', 'Devine\Repositories\LinkRepository');
	}
}
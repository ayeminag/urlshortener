<?php namespace Devine\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class LittleServiceProvider extends ServiceProvider{
	public function register(){
		$this->app->bind('little', 'Devine\Services\LittleService');
	}
}